<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubCategory>
 */
class SubCategoryFactory extends Factory
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
            'description'=>fake()->text(),
            'status' => fake()->randomElement(['exist', 'not-exist']),
            'category_id' => function(){
                return Category::inRandomOrder()->first()->id;
            }
        ];
    }
}
