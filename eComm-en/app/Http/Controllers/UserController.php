<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $user = User::where(['email'=>$req->email])->first();
        if(!$user ||  !Hash::Check($req->password,$user->pasword) )
        {
            return 'Username or Password is not matched!';
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
}
