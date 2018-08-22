<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FinancialReport extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'financial_reports';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
      protected $fillable = [
        'judul', 'user_id', 'keterangan', 'filestore', 'filepath'
      ];

      public function User(){
        return $this->belongsTo('App\User');
      }
}
