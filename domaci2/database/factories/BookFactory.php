<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'publisher'=>$this->name(),
            'number_of_copy'=>$this->faker->rand(1,50),
        ];
    }
}
