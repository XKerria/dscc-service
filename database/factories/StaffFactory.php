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
            'gender' => 2,
            'avatar_url' => $this->faker->imageUrl(),
            'type' => $this->faker->randomElement(['司机', '秘书', '家政']),
            'remark' => $this->faker->paragraph
        ];
    }
}
