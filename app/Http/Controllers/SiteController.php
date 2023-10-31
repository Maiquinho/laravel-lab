<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    // Lógica do controller...
    public function index(){
        $name = 'Michael';

        $data = [
            'name' => $name,
        ];

        return view('welcome', $data);
    }


    public function exit(){
        return view('exit');
    }


    public function users(Request $request){

        $data = [
            'qnt' => $request->qnt
        ];

        return view('users', $data);
    }
}
