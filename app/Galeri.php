<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'galeri';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
      protected $fillable = [
        'judul', 'user_id', 'deskripsi', 'dir_name'
      ];

      public function User(){
        return $this->belongsTo('App\User','user_id');
      }

      public function Photos(){
        return $this->hasMany('App\GaleriSingle');
      }
}
