<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CountryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_en' => $this->faker->name(),
            'name_ru' => $this->faker->name(),
            'description' => $this->faker->text(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
