<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product_name = $this->faker->unique()->words($nb=2, $asText=true);
        $slug = Str::slug($product_name);

        return [
            'name' => $product_name,
            'slug' => $slug,
            'short_description' => $this->faker->text(200),
            'description' => $this->faker->text(500),
            'regular_price' => $this->faker->numberBetween(1800, 7000),
            'SKU'           => 'DIGI'.$this->faker->unique()->numberBetween(100, 1000),
            'stock_status' => 'instock',
            'quantity' => $this->faker->numberBetween(100, 200),
            'image' => 'chicken_'.$this->faker->numberBetween(1, 3).'.jpg',
            'category_id' => $this->faker->numberBetween(1, 2) // 15mn


        ];
    }
}
