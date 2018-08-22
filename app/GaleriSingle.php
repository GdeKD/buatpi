<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GaleriSingle extends Model
{
  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'galeri_single';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
    protected $fillable = [
      'filestore', 'galeri_id', 'filepath'
    ];

    public function Galeri(){
      return $this->belongsTo('App\Galeri','galeri_id');
    }

}
