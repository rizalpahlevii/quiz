<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'stock_avaible' => $this->faker->randomDigit(),
            'stock_in' => $this->faker->randomDigit(),
            'stock_out' => $this->faker->randomDigit(),
        ];
    }
}
