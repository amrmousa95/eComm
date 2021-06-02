<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $req){
        $user = User::where(["email" => $req->email])->first();
        #check email and password in database
        if(!$user || !Hash::check($req->password,$user->password)){
            return "User Name Or password not matched";
        }
        $req->session()->put('user',$user);
        return redirect()->route('product');
    }
    public function register(Request $req)
    {
        User::create([
            'name'=>$req->name,
            'email'=>$req->email,
            'password'=>bcrypt($req->password)
        ])->save();
        return redirect('/login');
    }
}
