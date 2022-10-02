<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthController extends Controller
{
    /**
   * 
   * @return ログイン画面
   */
  public function login()
  {
    return view('auth.login');
  }

  /**
   * 
   * @return  登録画面
   */
  public function register()
  {
    return view('auth.register');
  }

  /**
   * @param $request
   * @return  ダッシュボード画面又はログイン画面
   */
  public function postLogin(Request $request)
  {
    $request->validate([
      'email' => 'required',
      'password' => 'required'
    ]);

    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials)) {
        return redirect()->intended('admin.dashboard')
                          ->withSuccess('You have successfully logged in');
    }
    return redirect('auth.login')->withSuccess('Opps! You have entered invalid credentials');
  }

  /**
   * @param $request
   * @return ダッシュボード画面
   */
  public function postRegister(Request $request) 
  {
    $request->validate([
      'name' => 'required',
      'email' => 'required',
      'password' => 'required|min:8'
    ]);

    $data = $request->all();
    $this->create($data);

    return redirect('admin.dashboard')->withSuccess('Great! You have successfully logged in');

  }

  /**
   * 
   * @return ダッシュボード画面又はログイン画面
   */
  public function index()
  {
    if(Auth::check()) {
      return view('admin.dashboard');
    }

    return redirect('auth.login')->withSuccess('Opps! you do not have access');
  }

  /**
   * @param $data
   * @return 
   */
  public function create(array $data)
  {
    return User::create([
      'name' => $data['name'],
      'email' => $data['email'],
      'password' => Hash::make($data['password'])
    ]);
  }

  /**
   * 
   * @return ログイン画面
   */
  public function logout()
  {
    // Session::flush();
    Auth::logout();

    return Redirect('login');
  }
}
