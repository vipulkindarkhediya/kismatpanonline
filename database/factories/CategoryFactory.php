<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Brand;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
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
            'brands_id' => Brand::pluck('id')->random(),
            'name' => fake()->name(),
            'image' => fake()->image(null,360,360,'cats',false,true),
            'status' => 'pending'
        ];
    }
}
