<?php

namespace Database\Factories;

use App\Models\Vip;
use Illuminate\Database\Eloquent\Factories\Factory;

class VipFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vip::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'icon_url' => 'https://picsum.photos/600/320?random=' . $this->faker->unique()->numberBetween(0, 9999),
            'desc' => $this->faker->paragraph
        ];
    }
}
