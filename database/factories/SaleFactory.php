<?php

namespace Database\Factories;

use App\Models\Sale;
use Illuminate\Database\Eloquent\Factories\Factory;

class SaleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sale::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(rand(1, 4), true),
            'cover_url' => 'https://picsum.photos/320/180?random=' . $this->faker->unique()->numberBetween(0, 9999),
            'image_url' => 'https://picsum.photos/600/800?random=' . $this->faker->unique()->numberBetween(0, 9999),
            'content' => $this->faker->randomHtml()
        ];
    }
}
