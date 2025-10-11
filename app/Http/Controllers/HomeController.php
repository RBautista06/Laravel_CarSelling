<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        // $cars  = Car::get();
        // $cars = Car::where("published_at",'!=',null)->get();\
        // dump($cars);

        // $carData = [
        //     'maker_id' => 1,
        //     'model_id' => 1,
        //     'year' => 2000,
        //     'price' => 10,
        //     'vin' => '222',
        //     'mileage' => 1,
        //     'car_type_id' => 1,
        //     'fuel_type_id' => 1,
        //     'user_id' => 1,
        //     'city_id' => 1,
        //     'address' => "Shit",
        //     'phone' => "123",
        //     'description' => null,
        //     'published_at' => now(),
        // ];

        // $car3 = new Car($carData);
        // $car3->save();

        return view("home.index");
    }
}
