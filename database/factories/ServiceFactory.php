<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'cover' => $this->faker->imageUrl(),
            'intro' => $this->faker->paragraph,
            'images' => [$this->faker->imageUrl()],
            'priority' => $this->faker->numberBetween(0, 9999),
            'category_id' => null
        ];
    }
}
