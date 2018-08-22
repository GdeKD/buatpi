<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Announcement;
use App\AnnouncementComment;
use Illuminate\Http\Request;

class beritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $announcements = Announcement::orderBy('updated_at','desc')->paginate(3);
        $lastcomments =  AnnouncementComment::latest()->paginate(3);
        return view('client.berita.berita',compact('announcements','lastcomments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.berita.newsInsertion');
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
        if( Announcement::where('slug',$slug)->first()!=null)
        $slug = $slug.'-'.time();

        $announcements = Announcement::create([
          'judul' => $request->title,
          'slug' => $slug,
          'konten' => $request->konten,
          'userid' =>auth::user()->id
        ]);
        return redirect('/berita')->with('msg','Berita diunggah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
      $announcement = Announcement::where('slug',$slug)->first();
      if (empty($announcement))
      abort(404, 'message');
      return view('admin.berita.beritaShow',compact('announcement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $announcement=Announcement::findOrFail($id);
        return view('admin.berita.newsEdit', compact('announcement'));
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
          'konten' => 'required|'
        ]);
        $announcement = Announcement::findOrFail($id);
        if ($announcement->owner()) {
          // code...
          $announcement->update([
            'judul' => $request->title,
            'konten' => $request->konten,
          ]);
        }
        else {
          abort(404, 'jancok!');
        }
        return redirect('admin/berita/list')->with('msg','Berita telah dipebarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $announcement=Announcement::findOrFail($id);
        if ($announcement->owner()) {
          $announcement->delete();
        }
        else abort(403);
        return redirect('admin/berita/list')->with('redmsg','Berita dihapus.');
    }

    public function list(){
      $announcements = Announcement::orderBy('updated_at','desc')->paginate(8);
      return view('admin.berita.listBerita',compact('announcements'));
    }
}
