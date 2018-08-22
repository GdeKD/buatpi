<?php

namespace App\Http\Controllers;

use auth;
use App\Forum;
use App\ForumComment;
use Illuminate\Http\Request;

class forumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forums = Forum::latest()->paginate(5);
        return view('client.forum.index',compact('forums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.forum.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->input());
        $this->validate($request, [
          'title' => 'required|string|max:100',
          'konten' => 'required'
        ]);
        $slug = str_slug($request->title,'-');
        if(Forum::where('slug', $slug)->first()!=null)
        $slug = $slug.'-'.time();
        $forums = Forum::create([
          'judul' => $request->title,
          'slug' => $slug,
          'konten' => $request->konten,
          'userid' => auth::user()->id
        ]);
        return redirect('/forum')->with('msg','Topik diskusi berhasil diunggah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $forum = Forum::where('slug',$slug)->first();
        $comments = ForumComment::where('forum_id',$forum->id)->paginate(7);
        if(empty($forum))
        abort(404,'message');
        return view('client.forum.show',compact('forum','comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $forum = Forum::findOrFail($id);
        return view('client.forum.edit',compact('forum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
          'title' => 'required|string|max:100',
          'konten' => 'required'
        ]);
        $forum = Forum::findOrFail($id);
        if($forum->owner()){
          $forum->update([
            'judul' => $request->title,
            'konten' =>$request->konten,
          ]);
        }
        else abort(404,'message');

        return redirect('forum')->with('msg','Topik diskusi berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $forum = Forum::findOrFail($id);
        if($forum->owner()){
          $forum->delete();
        }
        else abort(403);
        return redirect('forum')->with('redmsg','Topik diskusi telah dihapus.');
    }
}
