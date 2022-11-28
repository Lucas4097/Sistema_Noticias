<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NoticeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(15),
            'preview' => $this->faker->text(50),
            'image' => Str::random(50),
            'description' => $this->faker->text(),
            // 'type' => 1,
            'user_id' => rand(1,1),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
