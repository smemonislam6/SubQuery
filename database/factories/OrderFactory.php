<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => Product::inRandomOrder()->first()->id,
            'user_id'   => User::inRandomOrder()->first()->id,
            'order_number' => Str::random(8),
            'order_date' => now(),
            'status' => 'pending',
            'total' => rand(1, 1000),
            'discount' => rand(0, 100),
        ];
    }
}
