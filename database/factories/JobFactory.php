<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Province;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $categories = Category::select('id')->get()->pluck('id')->toArray();
        $provincesData = Province::with('cities')->get();

        $province = $provincesData->shuffle()->first()->id;
        $citiesData = $provincesData->where('id', $province)->first()->cities;
        $city = $citiesData->shuffle()->first()->id;

        $users = User::select('id')->get()->pluck('id')->toArray();

        return [
            'user_id' => $this->faker->randomElement($users),
            'province_id' => $province,
            'city_id' => $city,
            'category_id' => $this->faker->randomElement($categories),
            'title' => $this->faker->realText(),
            'description' => $this->faker->realText(),
            'type' => $this->faker->randomElement(['part-time', 'full-time', 'remote']),
            'experience' => $this->faker->numberBetween(1, 9),
            'salary' => $this->faker->randomElement([35000000, 50000000, 140000000, 125000000, 70000000]),
        ];
    }
}
