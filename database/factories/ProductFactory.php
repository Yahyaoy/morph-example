<?php

namespace Database\Factories;

use App\Models\SubCategory;
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
    public function definition()
    {
        return [
            //
            'title' => fake()->title(),
            'price' =>fake()->randomNumber(),
            'description'=>fake()->text(),
            'status' => fake()->randomElement(['exist', 'not-exist']),
            'sub_category_id' => function(){
                return SubCategory::inRandomOrder()->first()->id;
            }
        ];
    }
}
