<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sub_Category>
 */
class SubCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'categories_id' => Category::pluck('id')->random(),
            'name' => fake()->name(),
            'image' => fake()->image(null,360,360,'black',false,true),
            'status' => 'pending'
        ];
    }
}
