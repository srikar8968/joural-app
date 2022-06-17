<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EditorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'avatar' => $this->faker->slug(2),
            'slug' => $this->faker->unique()->slug(),
            'info' => $this->faker->paragraph(),
            'description' => $this->faker->paragraphs(4, true),
            'role' => 'Editor-In-Chief',
            'category_id' => $this->faker->numberBetween(0, 5),
            'meta_id' => $this->faker->numberBetween(0, 5),
            'status' => true,
            
        ];
    }
}
