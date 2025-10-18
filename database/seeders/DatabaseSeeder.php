<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\CarImage;
use App\Models\CarType;
use App\Models\City;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\Model as CarModel;
use App\Models\State;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create Car Types
        // Sedan, Hatchback, SUV, Pickup Truck, etc.
        CarType::factory()
            ->sequence(
                ['name' => 'Sedan'],
                ['name' => 'Hatchback'],
                ['name' => 'SUV'],
                ['name' => 'Pickup Truck'],
                ['name' => 'Minivan'],
                ['name' => 'Jeep'],
                ['name' => 'Coupe'],
                ['name' => 'Crossover'],
                ['name' => 'Sports Car'])
            ->count(9)
            ->create();

        // Create Fuel Types
        // Gasoline, Diesel, Electric, Hybrid
        FuelType::factory()
            ->sequence(
                ['name' => 'Gasoline'],
                ['name' => 'Diesel'],
                ['name' => 'Electric'],
                ['name' => 'Gasoline'],
                ['name' => 'Hybrid'])
            ->count(4)
            ->create();

        // Create States with Cities

        $states = [
            'California' => ['Los Angeles', 'San Fracisco', 'San Diego'],
            'Texas' => ['Houston', 'San Antonio', 'Dallas', 'Austin'],
            'Florida' => ['Miami', 'Orlando', 'Tampa', 'Jacksonville'],
            'New York' => ['New York City', 'Buffallo', 'Rochester', 'Yonkers'],
            'Illinois' => ['Chicago', 'Aurora', 'Naperville', 'Joliet'],
            'Pennsylvania' => ['Philadelphia', 'Pittsburgh', 'Allentown'],
            'Ohio' => ['Columbus', 'Cleveland', 'Cincinnati', 'Toledo'],
            'Georgia' => ['Atlanta', 'Augusta', 'Columbus', 'Savannah', 'Athena'],
            'North Carolina' => ['Charllote', 'Raleigh', 'Greensboro'],
            'Michigan' => ['Detriot', 'Grand Rapids', 'Warren'],
        ];

        // Loop through each state and its list of cities
        foreach ($states as $state => $cities) {
            // Create a new State record using a factory,
            // and set its name to the current state name
            State::factory()
                ->state(['name' => $state])
                // For this State, also create related City records
                ->has(
                    City::factory()

                        // Create as many City records as there are city names in the array
                        ->count(count($cities))

                        // Assign each city its corresponding name using sequence()
                        // Example: ['name' => 'Los Angeles'], ['name' => 'San Francisco'], etc.
                        ->sequence(...array_map(fn($city) => ['name' => $city], $cities)),
                )
                // Finally, save the State and all related City records to the database
                ->create();
        }

        // Create Makers
        $makers = [
            'Toyota' => ['Camry', 'Corolla', 'Highlander', 'RAV4', 'Prius'],
            'Ford' => ['F-150', 'Escape', 'Explorer', 'Mustang', 'Fusion'],
            'Honda' => ['Civic', 'Accord', 'CR-V', 'Pilot', 'Odyssey'],
            'Chevrolet' => ['Silverado', 'Equinox', 'Malibu', 'Impala'],
            'Nissan' => ['Altima', 'Sentra', 'Rogue', 'Maxima', 'Murano'],
            'Lexus' => ['RX400', 'RX450', 'RX300', 'ES350', 'LS500', 'IS300'],
        ];

        foreach($makers as $maker => $models) {
            Maker::factory()
                ->state(['name' => $maker])
                ->has(
                    CarModel::factory()
                        ->count(count($models))
                        ->sequence(...array_map(fn($model) => ['name' => $model], $models))
                )
                ->create();
        }

        // Create users, cars with images and features
        // Create 3 users first, then create 2 more users,
        // and for each user (from the last 2 users) craete 50 cars,
        // with images and features and add these cars to favourite cars
        // of these 2 users

        User::factory()
            ->count(3)
            ->create();

        User::factory()
            ->count(2)
            ->has(
                Car::factory()
                    ->count(50)
                    ->has(
                        CarImage::factory()
                            ->count(5)
                            ->sequence(fn(Sequence $sequence)=> ['position' => $sequence->index % 5 + 1]),
                        'images'
                    )
                    ->hasFeatures(),
                    'favouriteCars'
            )
            ->create();
    }
}
