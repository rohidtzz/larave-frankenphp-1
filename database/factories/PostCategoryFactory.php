<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\PostCategory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostCategory>
 */
class PostCategoryFactory extends Factory
{
    public function definition(): array
    {
        $name = $this->faker->unique()->word; // Pastikan `word` unik
        return [
            'name' => ucfirst($name),
            'slug' => Str::slug($name . '-' . $this->faker->unique()->numberBetween(1, 50)), // Tambahkan angka random agar slug unik
        ];
    }

}
