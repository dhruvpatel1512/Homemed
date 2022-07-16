<?php

namespace App\Http\Controllers;
use App\Models\signup;
use Illuminate\Http\Request;

class signupController extends Controller
{
    
    public function index()
    {
        return view('signup');
    }

    public function save(Request $req)
    {
        $Full_Name = $req->Full_Name;
        $Email_Address = $req->Email_Address;
        $Username = $req->Username;
        $Password = $req->Password;
        
        $p = new signup;
        $p->Full_Name = $Full_Name;
        $p->Email_Address = $Email_Address;
        $p->Username = $Username;
        $p->Password = $Password;
        
        $p->save();

    }
}
