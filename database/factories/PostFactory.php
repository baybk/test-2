<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 2,
            'title' => $this->faker->realText(40),
            'description' => $this->faker->realText(80),
            'content' => $this->faker->realText(240),
        ];
    }
}
