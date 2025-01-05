<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->unique()->name();
        $slug = Str::slug($name);
        
        return [
            'name' => $name,
            'slug' => $slug,
            'category_id' => Category::inRandomOrder()->first()->id,
            'price' => rand(1, 100),
            'discount' => rand(0, 100),
            'description' => fake()->text(100),
        ];
    }
}
