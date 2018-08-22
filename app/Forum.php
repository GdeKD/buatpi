<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $fillable = [
      'judul', 'konten', 'slug', 'userid'
    ];

    public function user(){
      return $this->belongsTo('App\User','userid');
    }

    public function comment(){
      return $this->hasMany('App\ForumComment');
    }

    public function owner(){
      if(auth::guest())
      return false;

      return auth::user()->id==$this->user->id;
    }
}
