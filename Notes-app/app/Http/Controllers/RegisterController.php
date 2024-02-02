<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create (Request $request) 
    {
        //Todo validate request
        $validated = $request->validate([
            "name" => "required|min:3|max:60",
            "email" => "required",
            "password" => 'required',
            "password_confirm" => 'required|same:password'
        ]);
        
    }

    //TODO add a user to DB




    //TODO authenticate user
}
