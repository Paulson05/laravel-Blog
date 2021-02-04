<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function index(){
      return view('admin.index');
  }
  public function profile(){
    return view('admin.partials.profile');
}
public function table(){
  return view('admin.partials.table');
}
public function login(){
  return view('admin.partials.login');
}
public function register(){
  return view('admin.partials.register');
}

public function getAdminSignup(){

  return view('admin.signup');

}

public function postAdminSigup(Request $request){
 
  $array=collect($request->only(['email','username']))->put('password',bcrypt($request->password))->all();
  Admin::create($array);
   return redirect()->back()
                    ->with('info', 'you are signed up!');
}

public function getAdminSignin(){

  return view('admin.login');
}

public function postAdminlogin(Request $request){
     
  if (!Auth::attempt($request->only(['email', 'password']), $request->has('remember'))){
           
    return redirect()->back()->with('info', 'could not sign you in with those details');
    
}

return redirect()->route('admin.index')
->with('info', 'you are signed in!');

}




}