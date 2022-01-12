<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $occupations = ['طراح وب', 'برنامه نویس وب', 'معمار پایگاه داده'];

        return [
            'occupation' => $occupations[rand(0, 2)],
            'about' => $this->faker->realText(),
            'phone_number' => $this->faker->phoneNumber(),
            'website' => $this->faker->optional(.5)->url(),
        ];
    }
}
