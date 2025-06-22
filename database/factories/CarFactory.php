<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $brands = Brand::all();

        return [
            'brand_id' => $this->faker->randomElement($brands),
            'name' => fake()->name,
            'model' => fake()->year,
            'price' => fake()->numberBetween(100, 1000),
            'description' => fake()->text,
            'is_available' => fake()->boolean,
        ];
    }
}
