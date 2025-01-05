<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductDetail>
 */
class ProductDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $sku = 'SKU-' . strtoupper(Str::random(8));
        
        return [
            'product_id' => Product::inRandomOrder()->first()->id,
            'description' => fake()->paragraph(),
            'quantity' => rand(1, 100),
            'stock' => rand(1, 100),
            'image' => fake()->imageUrl(),
            'sku' => $sku
        ];
    }
}
