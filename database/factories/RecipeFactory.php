<?php

namespace Database\Factories;

use App\Model;
use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecipeFactory extends Factory
{
    protected $model = Recipe::class;

    public function definition(): array
    {
    	return [
            'name' => $this->faker->name(),
            'description' => $this->faker->paragraph(),
            'ingredents' => $this->faker->sentence(),
            'youtube_link' => $this->faker-> sentence(),
            'category_id' => Category::all()->random()->id
        ];
    }
}
