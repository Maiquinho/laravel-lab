<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    // Lógica do controller...
    public function index(){
        $name = 'Michael';
        $lastName = 'Santos';
        $birthDay = '23/04/2001';
        $age = 90;

        $data = [
            'name' => $name,
            'lastName' => $lastName,
            'birthDay' => $birthDay,
            'age' => $age
        ];

        return view('welcome', $data);
    }

    // Lógica do controller...
    public function exit(){
        return view('exit');
    }
}
