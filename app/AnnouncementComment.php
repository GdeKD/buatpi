<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;

class AnnouncementComment extends Model
{
  protected $fillable = [
    'konten', 'user_id', 'berita_id'
  ];

  public function user(){
    return $this->belongsTo('App\User','user_id');
  }

  public function berita(){
    return $this->belongsTo('App\Announcement','berita_id');
  }

  public function owner(){
    if(auth::guest())
    return false;

    return auth::user()->id==$this->user->id;
  }
}
