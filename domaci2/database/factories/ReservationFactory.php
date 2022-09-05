<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        'date_of_returned'=>$this->faker->datedateTime('Y_m_d H:i:s'),
        ];
    }
}
