<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function profile() {
        return view('profile');
    }

   

    public function create(){
        return view("create");
    }

    public function feeds(){
        return view("feeds");
    }

    public function edit() {
        return view('editblog');
    }
    
    public  function  register() {
        return view('register');
    }
    
}
