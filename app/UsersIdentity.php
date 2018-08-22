<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersIdentity extends Model
{
  /**
   * The table associated with the model.
   *
   * @var string
   */
    protected $table = 'usersidentities';
    protected $primaryKey = 'nik';
    protected $dates = ['tanggal_lahir']; //regist format tanggal ke lib:carbon

    protected $fillable = [
      'nik', 'nkk', 'nama', 'tempat_lahir', 'tanggal_lahir', 'agama', 'alamat'
    ];

    public $incrementing = false;

    public function user(){
      return $this->hasOne('App\User');
    }
}
