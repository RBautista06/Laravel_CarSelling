<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Maker;
use App\Models\Model;
use App\Models\User;



class HomeController extends Controller
{
    public function index()
    {
        User::factory()
            ->has(Car::factory()->count(5), 'favouriteCars')
            ->create();

        return view('home.index');
    }
}
