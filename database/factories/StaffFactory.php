<?php

namespace Database\Factories;

use App\Models\Staff;
use Illuminate\Database\Eloquent\Factories\Factory;

class StaffFactory extends Factory
{
    protected $model = Staff::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name('female'),
            'gender' => 0,
            'image' => $this->faker->imageUrl(),
            'type' => $this->faker->randomElement(['driver', 'secretory', 'housekeeper'])
        ];
    }
}
