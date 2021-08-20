<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gyltechController extends Controller
{
    
    public function home (){
            return view ('home');
    }
    
    public function index(){
        return view ('index');
}

public function redes(){
        return view ('redes');
}
public function it(){
        return view ('it');
}
public function bi(){
        return view ('bi');
}
public function sobre(){
        return view ('sobre');
}
public function programacao(){
        return view ('programacao');
}
public function design(){
        return view ('design');
}
public function train(){
        return view ('train');
}
}
