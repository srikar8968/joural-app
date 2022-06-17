<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(2, true),
            'content' => $this->faker->paragraphs(4, true),
            'slug' => $this->faker->unique()->slug(),
            'meta_id' => $this->faker->numberBetween(0, 5),
        ];
    }
}
