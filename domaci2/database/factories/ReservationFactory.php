<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\User;
use \App\Models\Book;

class ReservationFactory extends Factory
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
            'date_of_create'=>$this->faker->dateTime('Y_m_d H:i:s'),
        'date_of_returned'=>$this->faker->dateTime('Y_m_d H:i:s'),
        'user_id'=>User::factory(),
        'book_id'=>Book::factory(),
        ];
    }
}
