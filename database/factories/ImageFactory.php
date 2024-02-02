<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Article;
use App\Models\Section;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word() . fake()->fileExtension,
            'article_id' => Category::random(1)->first(),
            'user_id' => User::random(1)->first(),
            'article_id' => Article::random(1)->first(),
            'section_id' => Section::random(1)->first()
        ];
    }
}
