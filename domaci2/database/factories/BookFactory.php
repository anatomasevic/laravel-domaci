<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Author;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title'=>$this->faker->title(),
        'description'=>$this->faker->paragraph(),
            'year'=>$this->faker->year(),
            'publisher'=>$this->faker->name(),
            'number_of_copy'=>$this->faker->numberBetween(1,60),
            'author_id'=>Author::factory(),
        ];
    }
}
