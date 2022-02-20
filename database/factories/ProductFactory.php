<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->company(),
            'image' => $this->faker->imageUrl(),
            'description' => $this->faker->sentence(),
            'people' => $this->faker->numberBetween(0,10),
            'user_id' => User::all()->random(),
            'date' => $this->faker->dateTimeBetween('now','+1 year'),
        ];
    }
}
