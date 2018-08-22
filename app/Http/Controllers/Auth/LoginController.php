<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    // protected function redirectTo(){
    //     if (user()->role == 9) {
    //       return '/admin';
    //       return '/home';
    //     }
    // }


    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        if(!session()->has('url.intended')){
          session(['url.intended' => url()->previous()]);
        }
        return view('auth.login');
    }

    protected function attemptLogin(Request $request) {

      $identity = $request->get("email");
      $password = $request->get("password");

      return \Auth::attempt([
          filter_var($identity, FILTER_VALIDATE_EMAIL) ? 'email' : 'name' => $identity,
          'password' => $password
      ]);
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
      if($user->isAdmin())
      return redirect('/admin');

      // return redirect('/home');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
