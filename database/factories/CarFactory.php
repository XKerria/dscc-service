<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    protected $model = Car::class;

    public function definition()
    {
        return [
            'name' => $this->faker->text(32),
            'logo' => $this->faker->imageUrl(),
            'image' => $this->faker->imageUrl(),
            'rent' => $this->faker->numberBetween(1000, 9999),
            'fare' => $this->faker->numberBetween(10, 50)
        ];
    }
}
