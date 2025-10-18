<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarImage>
 */
class CarImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'image_path' => 'https://picsum.photos/640/480?random=' . fake()->unique()->numberBetween(1, 1000),
            'position' => function (array $attributes) {
                return Car::find($attributes['car_id'])->images()->count() + 1;
            }
        ];
    }
}
