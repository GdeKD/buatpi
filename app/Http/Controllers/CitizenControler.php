<?php

namespace App\Http\Controllers;

use App\UsersIdentity;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class CitizenControler extends Controller
{
    public function list(){
      $list = UsersIdentity::paginate(10);
      return view ('admin.listWarga',compact('list'));
    }
}
