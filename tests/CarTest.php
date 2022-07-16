<?php

use Thuhtet\LaravelExample\Models\Car;

it('can test model', function () {

    /** @var Car $car */
    $car = Car::factory()->create([
        'car_plate' => '001',
        'brand' => 'BMW',
        'price' => 1000 
    ]);

    expect($car->getBrand())->toEqual('BMW');

});
