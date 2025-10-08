<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view("home.index", [
            'name' => 'Railley',
            'surname' => 'Bautista',
            'color' => 'Bautista',
            'hobbies' => ['Tennis', 'Fishing']
        ]);
    }
}
