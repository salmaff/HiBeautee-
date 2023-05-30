<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserM;
use Illuminate\Support\Facades\Auth;


class User extends Controller
{
    public function loginprosesuser(Request $request)
    {
      $pengguna = UserM::where(['NamaUser' => $request->Username, 'Password' => $request->Password])->first();

     
      if (!$pengguna) {
        return "NPM or password is not match";
      } else {
        $request->session()->put('pengguna', $pengguna);
        return redirect('/home');
      }
    }



    public function logoutuser(Request $request)
  {
    Auth::logout();
    $request->session()->forget('pengguna');
    return redirect('/home');
  }


  public function registeruser(Request $request)
  {

    $data = [
      'NamaUser' => $request->input('Username'),
      'Password' => $request->input('Password'),
      'Email' => $request->input('Email'),
      'NoTelp' => $request->input('NoTelp'),
     
    ];

    UserM::create($data);


    
    return redirect('/login');
  }
}
