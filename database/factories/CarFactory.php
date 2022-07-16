<?php

namespace Thuhtet\LaravelExample\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Thuhtet\LaravelExample\Models\Car;

class CarFactory extends Factory
{
    protected $model = Car::class;

    public function definition()
    {
        return [
            'car_plate' => $this->faker->words,
            'brand' => $this->faker->name,
            'price' => $this->faker->randomDigit
        ];
    }
}

