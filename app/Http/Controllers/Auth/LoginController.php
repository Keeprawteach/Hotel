<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Session;

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
  protected $redirectTo = '/admin/menu';

  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    //$this->middleware('guest')->except('getLoggout');
  }

  public function getLogin() {
    return view('admin.login');
  }

  /**
  * Handle a login request to the application.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function postLogin(Request $request)
  {
    // get our login input
    $login = $request->input('login');
    // check login field
    $login_type = filter_var( $login, FILTER_VALIDATE_EMAIL ) ? 'email' : 'username';
    // merge our login field into the request with either email or username as key
    $request->merge([ $login_type => $login ]);
    // let's validate and set our credentials
    if ( $login_type == 'email' ) {
      $this->validate($request, [
        'email'    => 'required|email',
        'password' => 'required',
      ]);
      $credentials = $request->only( 'email', 'password' );
    } else {
      $this->validate($request, [
        'email' => 'required',
        'password' => 'required',
      ]);
      $credentials = $request->only( 'email', 'password' );
    }
    if (Auth::attempt($credentials, $request->has('remember')))
    {
      return redirect()->intended($this->redirectPath());
    }
    return redirect('admin/menu');

  }

  public function postRegister(Request $request) {
    $this->validation($request);
    User::create([ 'name' => $request['name'], 'email' => $request['email'], 'password' => bcrypt($request['password']), ]);
  }

  protected function validation($request) {
    return $this->validate($request,[ 'name' => 'required|string|max:255', 'email' => 'required|string|email|max:255|unique:users', 'password' => 'required|string|min:6|confirmed' ]);
  }
  public function getLogout() {
    Auth::logout();
    Session::flush();
    return redirect()->route('login');
  }

  public function logout(Request $request){
    Auth::logout();
    Session::flush();
    return redirect('/');
  }
}
