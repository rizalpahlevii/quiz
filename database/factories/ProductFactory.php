<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $categoriesId = Category::get()->pluck('id')->toArray();
        return [
            'name' => $this->faker->word,
            'price' => $this->faker->randomFloat(2, 10, 200),
            'description' => $this->faker->sentence,
            'unit' => $this->faker->word,
            'category_id' => function () use ($categoriesId) {
                return $categoriesId[array_rand($categoriesId)];
            }
        ];
    }
}
