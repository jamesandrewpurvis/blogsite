<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            'post_title' => Str::limit(fake()->sentence(), 15, ''),
            'post_description' =>  Str::limit(fake()->paragraph(), 45, ''),
            'post_content' => fake()->paragraphs(5, true),
            'post_image' => 'img/stock' . rand(1,7) . '.jpg',
            'post_author_id' => 1,
            'post_slug' => fake()->slug(),
            'post_featured' => false,
        ];
    }
}
