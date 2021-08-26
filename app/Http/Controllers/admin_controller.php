<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\admin;

class admin_controller extends Controller
{
    //
    function signin(){
        return view('login');
    }

    function signup(){
        return view('register');
    }

    function register(Request $req){
        $admin = new admin;
        $admin->fullname = $req->fullname;
        $admin->email = $req->email;
        $admin->password = Hash::make($req->password);
        $save = $admin->save();
        if($save){
            return back()->with('success','New user added successfully in the database');
        }
        else{
            return back()->with('fail','Something is wrong');
        }
    }

    function login(Request $req){
        $admin = admin::where('email','=',$req->email)->first();
        if(!$admin){
            return back()->with('fail','Email address does not found');
        }else{
            if(Hash::check($req->password,$admin->password)){
                $req->session()->put('loggedId',$admin->id);
                $req->session()->put('loggedName',$admin->fullname);
                $req->session()->put('loggedEmail',$admin->email);
                return redirect('/');
            }
            else{
                return back()->with('fail','Incorrect Password');
            }
        }
    }

    function logout(){
        if(session()->has('loggedId') && session()->has('loggedName') && session()->has('loggedEmail')){
            session()->pull('loggedId');
            session()->pull('loggedName');
            session()->pull('loggedEmail');
            return redirect('login');
        }
    }
}
