<?php

namespace Database\Factories;

use App\Models\Seance;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class SeanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $date = $this->faker->dateTimeBetween("-1 months", "now + 7 day")->format('Y-m-d');
        $timeStart = ["10:00", "12:00", "14:00", "16:00", "18:00", "20:00"];

        return [
            'name' => $this->faker->name(),
            'date_start' => $date,
            'time_start' => $this->faker->randomElement($timeStart),
        ];
    }

}
