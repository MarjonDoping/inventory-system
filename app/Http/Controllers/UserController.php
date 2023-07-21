<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
// use Session;
// use Hash;
// use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    
   
    function register()
    {
        return view ('register');
    }
    function registeruser(Request $request)
    {
        
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'username'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8|max:12',
            
        ]);

        $user = new Admin();
        $user->firstname=$request->firstname;
        $user->email=$request->email;
        $user->password=($request->password);
        $user->lastname=$request->lastname;
        $user->username=$request->username;
      
        $res=$user->save();

        if ($res) 
        {
            // code...
            return back()->with('success','Registration inserted complete');
        }
        else 
        {
            // code...
            return back()->with('fail','Registration failed to create');
        }
    }

}
