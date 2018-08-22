<?php

namespace App\Http\Controllers;

use Auth;
use App\Announcement;
use App\AnnouncementComment;
use Illuminate\Http\Request;

class BeritaCommentController extends Controller
{
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request, $id)
  {
      $this->validate($request, [
        'komen' => 'required|string|max:60'
      ]);
      $berita = Announcement::findOrFail($id);
      // dd($forum->comment);
      $comment = AnnouncementComment::create([
        'konten' => $request->komen,
        'berita_id' => $id,
        'user_id' => auth::user()->id
      ]);
      return redirect()->back()->with('komenmsg'.$berita->id,'Komentar berhasil diunggah!');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $comment = AnnouncementComment::findOrFail($id);
      if($comment->owner()){
        $comment->delete();
      }
      else abort(403);
      return redirect()->back()->with('commentredmsg','komentar telah dihapus.');
  }
}
