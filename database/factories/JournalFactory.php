<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JournalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sku' => $this->faker->unique()->numerify('JOURNAL####'),
            'title' => $this->faker->sentence(4),
            'url' => $this->faker->url(),
            'info' => $this->faker->sentences(2, true),
            'impact_factor' => ($this->faker->randomFloat(2, 10, 80) . ' (' . $this->faker->randomNumber(2, true) . ' Yr Journal Impact Factor)'),
            'citations_report_url' => $this->faker->url(),
            'category_id' => $this->faker->numberBetween(0, 10),
            'user_id' => $this->faker->numberBetween(0, 5),
            'meta_id' => $this->faker->numberBetween(0, 5),
            'status' => true,
        ];
    }
}
