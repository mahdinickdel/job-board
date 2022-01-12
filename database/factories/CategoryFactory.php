<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $categories = ['فناوری اطلاعات', 'رستوران', 'مالی', 'امنیت'];

        return [
            'name' => $this->faker->unique()->randomElement($categories),
        ];
    }
}
