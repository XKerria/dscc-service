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
            'intro' => $this->faker->paragraph,
            'tip' => $this->faker->paragraph,
            'content' => $this->faker->randomHtml(),
            'priority' => $this->faker->numberBetween(0, 9999),
            'icon_url' => $this->faker->imageUrl(),
            'video_url' => $this->faker->imageUrl(),
            'category_id' => null,
            'staff_type' => null,
            'partner_type' => null,
            'prices' => null,
            'items' => null,
        ];
    }
}
