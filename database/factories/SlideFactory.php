<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SlideFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'slideimage'=> $this->faker->imageUrl(),
            'slidetitle' => $this->faker->text(),
            'slidedescription' => $this->faker->sentence(),
            'extra' => $this->faker->text(),
        ];
    }
}
