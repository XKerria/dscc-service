<?php

namespace Database\Factories;

use App\Models\Coupon;
use Illuminate\Database\Eloquent\Factories\Factory;

class CouponFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Coupon::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(2, true),
            'type' => $this->faker->randomElement(['代金券']),
            'value' => rand(1, 1000),
            'expire' => rand(1, 100),
            'expire_unit' => $this->faker->randomElement(['minute', 'hour', 'day', 'week', 'month', 'quarter', 'year']),
            'remark' => $this->faker->words(2, true)
        ];
    }
}
