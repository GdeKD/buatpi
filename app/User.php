<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', //unik dibuat username (modif)
        'password', 'user_nik', 'email'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //cek role user? admin : client
    public function isAdmin(){
      if($this->role == 9) return true;

      return false;
    }

    // relasi user adalah child dari UsersIdentity
    public function UsersIdentity(){
      return $this->belongsTo('App\UsersIdentity','user_nik');
    }

    //  relasi user punya banyak berita
    public function Announcement()
    {
      return $this->hasMany('App\Announcement');
    }

    // relasi user punya banyak komentar berita
    public function AnnouncementComment()
    {
      return $this->hasMany('App\AnnouncementComment');
    }

    // relasi user punya banyak forum
    public function Forum()
    {
      return $this->hasMany('App\Forum');
    }

    // relasi user punya banyak komentar forum
    public function ForumComment()
    {
      return $this->hasMany('App\ForumComment');
    }

    // relasi user punya banyak galeri
    public function Galeri()
    {
      return $this->hasMany('App\Galeri');
    }

    // relasi user punya banyak laporan keuangan
    public function Keuangans()
    {
      return $this->hasMany('App\FinancialReport');
    }
}
