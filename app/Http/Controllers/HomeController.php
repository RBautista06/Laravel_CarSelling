<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // $cars  = Car::get();
        // $cars = Car::where("published_at",'!=',null)->get();
        // dump($cars);

        /// example for inserting data to db
        // $carData = [
        //     'maker_id' => 1,
        //     'model_id' => 1,
        //     'year' => 2000,
        //     'price' => 10,
        //     'vin' => '1',
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

        // $car = Car::find(1);
        // $car->price = 50000;
        // $car->save();

        // Single Update
        // $car = Car::updateOrCreate(
        //     ['vin' => '10', 'price' => 50000],
        //     $carData);
        // dump($car);

        // Mass update
        // $car = Car::where('published_at', null)
        //             ->where('user_id', 1)
        //             ->update(['published_at'=> now()]);

        // single delete
        // $car = Car::find(1);
        // $car->delete();

        // MassDelete
        // $car = Car::destroy([2,3]);

        // delete with Condition
        // Car::where('published_at', null)
        //     ->where('user_id',1)
        //     ->delete();


        return view("home.index");
    }
}
