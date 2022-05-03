<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function login(Request $res)
    {
      $user= User::where(['email'=>$res->email])->first();
      //return $user->password;
      if(!$user || !Hash::check($res->password,$user->password))
      {
       return "Username Or Password Not Matched";
      }
      else{
          $res->session()->put('user',$user);
          return redirect('');
      }

    }
}
