<?php

namespace App\Http\Controllers;

use Auth;
use App\Forum;
use App\ForumComment;
use Illuminate\Http\Request;

class ForumCommentController extends Controller
{
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request,$id)
  {
      $this->validate($request, [
        'komen' => 'required|string|max:60'
      ]);
      $forum = Forum::findOrFail($id);
      // dd($forum->comment);
      $comment = ForumComment::create([
        'konten' => $request->komen,
        'forum_id' => $id,
        'user_id' => auth::user()->id
      ]);
      return redirect('/forum/'.$forum->slug)->with('komenmsg','Komentar berhasil diunggah!');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $comment = ForumComment::findOrFail($id);
      if($comment->owner()){
        $comment->delete();
      }
      else abort(403);
      return redirect()->back()->with('commentredmsg','komentar telah dihapus.');
  }
}
