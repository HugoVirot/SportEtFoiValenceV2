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
            'article_id' => rand(1, Article::count()),
            'user_id' => rand(1, User::count()),
            'article_id' => rand(1, Article::count()),
            'section_id' => rand(1, Section::count())
        ];
    }
}
