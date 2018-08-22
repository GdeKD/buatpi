<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratPengantar extends Model
{
  /**
   * The table associated with the model.
   *
   * @var string
   */
    protected $table = 'surat';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
    protected $fillable = [
      'pemohon','user_id', 'urutan', 'tujuan'
    ];

    public function User(){
      return $this->belongsTo('App\User');
    }
}
