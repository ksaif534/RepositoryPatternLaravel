<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RepositoryPattern>
 */
class RepositoryPatternFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'  => $this->faker->name,
            'user_id' => $this->faker->numberBetween(1, 10),
            'description' => $this->faker->text,
            'code_quality_level' => $this->faker->numberBetween(1, 5),
            'code_quality_score' => $this->faker->numberBetween(1, 5),
        ];
    }
}
