<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    //return "bienvenido
    public function index(){
        return view("principal");
    }
    
}
