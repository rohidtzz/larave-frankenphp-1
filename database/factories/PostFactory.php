<?php

namespace Database\Factories;

use App\Models\PostCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    public function definition(): array
    {
        $title = $this->faker->sentence;
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'content' => $this->faker->paragraphs(3, true),
            'image' => $this->faker->imageUrl(640, 480, 'posts', true),
            'user_id' => User::inRandomOrder()->first()?->id ?? User::factory(),
            'category_id' => PostCategory::inRandomOrder()->first()?->id ?? PostCategory::factory(),
        ];
    }
}
