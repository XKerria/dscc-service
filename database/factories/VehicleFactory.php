<?php

namespace Database\Factories;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleFactory extends Factory
{
    protected $model = Vehicle::class;

    public function definition()
    {
        return [
            'name' => $this->faker->text(32),
            'logo_url' => $this->faker->imageUrl(),
            'image_url' => $this->faker->imageUrl(),
            'day_price' => $this->faker->numberBetween(1000, 9999),
            'km_price' => $this->faker->numberBetween(10, 50),
            'remark' => $this->faker->paragraph
        ];
    }
}
