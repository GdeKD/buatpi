<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;

class ForumComment extends Model
{
  protected $fillable = [
    'konten', 'user_id', 'forum_id'
  ];

  public function user(){
    return $this->belongsTo('App\User','user_id');
  }

  public function forum(){
    return $this->belongsTo('App\Forum','forum_id');
  }

  public function owner(){
    if(auth::guest())
    return false;

    return auth::user()->id==$this->user->id;
  }
}
