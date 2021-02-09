<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Users;

class AuthController extends Controller
{
    public function userlogin()
    {
      return view ('auth.login');
    }

    public function postLogin(Request $request)
    {
     
      $array=collect($request->only(['email','username']))->put('password',bcrypt($request->password))->all();
      Users::create($array);
       return redirect()->back()
                        ->with('info', 'you are signed up!');
    }

    public function userSignup()
    {
      return view ('auth.signup');
    }

    public function postSignup(Request $request)
    {
  

      if (!Auth::attempt($request->only(['email', 'password']), $request->has('remember'))){
           
        return redirect()->back()->with('info', 'could not sign you in with those details');
        
    }

    return redirect()->route('admin.index')
    ->with('info', 'you are signed in!');

    }
}
