<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    // Lógica do controller...
    public function index(){
        return view('welcome');
    }

    // Lógica do controller...
    public function exit(){
        return view('exit');
    }
}
