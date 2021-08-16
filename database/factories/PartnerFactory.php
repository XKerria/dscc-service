<?php

namespace Database\Factories;

use App\Models\Partner;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartnerFactory extends Factory
{
    protected $model = Partner::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'type' => $this->faker->randomElement(['酒店', '票务', '娱乐']),
            'intro' => $this->faker->paragraph,
            'contact' => $this->faker->name,
            'contact_num' => $this->faker->phoneNumber,
        ];
    }
}
