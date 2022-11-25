<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'publisher_id' => $this->faker->numberBetween(1,10),
            'title' => $this->faker->name(),
            'author' => $this->faker->name(),
            'year' => $this->faker->year(),
            'synopsis' => $this->faker->realTextBetween(50,100),
            'image' => $this->faker->imageUrl()
        ];
    }
}
