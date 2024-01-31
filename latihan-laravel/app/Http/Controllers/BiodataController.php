<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function daftar(){
        return view("pages.form");
    }
    public function register(Request $request){
        $firstname = $request['fname'];
        $lastname = $request['lname'];

        return view('pages.home',['firstname' => $firstname, 'lastname' => $lastname]);
    }
}
