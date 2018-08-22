<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use auth;

class Announcement extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      // judul, slug, konten, userId
        'judul', 'slug', 'konten', 'userid'
    ];

    public function user(){
      return $this->belongsTo('App\User','userid');
    }

    public function comments()
    {
      return $this->hasMany('App\AnnouncementComment','berita_id');
    }

    public function owner(){
      if(Auth::guest())
      return false;

      return auth::user()->id == $this->user->id;
    }

    public function baru(){
      $waktuData = $this->created_at;
      $waktuSkrg = date_create();
      $diff = date_diff($waktuSkrg,$waktuData);

      if ($diff->d < 1)
        return 11111;

        return false;
    }

    public function diubah(){
      $waktuData = $this->updated_at;
      $waktuBuat = $this->created_at;
      $waktuSkrg = date_create();
      $diff = date_diff($waktuSkrg,$waktuData);

      if ($diff->d < 1 && $waktuBuat!=$waktuData)
        return true;

        return false;
    }
}
