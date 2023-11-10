<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mycontroller extends Controller
{
    function HomePage($name,$lname){
        // return "User_id :". $id;
        return view('home',["user_name"=>$name,"last_name"=>$lname]);

    }
    
}
