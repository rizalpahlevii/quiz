<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->run([
            UserSeeder::class
        ]);
        Category::factory(10)->create();
        Product::factory(1000)->create()->each(function ($product) {
            $detail = ProductDetail::factory()->make();
            $product->detail()->save($detail);
        });
    }
}
