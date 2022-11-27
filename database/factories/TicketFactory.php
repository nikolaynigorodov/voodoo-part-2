<?php

namespace Database\Factories;

use App\Models\Seance;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->deleteRepeat();
        $positions = Seance::pluck('id')->toArray();
        return [
            'seance_id' => $this->faker->randomElement($positions),
            'ticket' => $this->faker->numberBetween(1, 300),
        ];
    }

    public function deleteRepeat()
    {
        $seances = Seance::all();
        if($seances) {
            foreach ($seances as $seance) {
                $id = $seance->id;
                $date = $seance->date_start;
                $time = $seance->time_start;
                $duplicates = Seance::where(['date_start' => $date, 'time_start' => $time])->where('id', '!=', $id)->get();

                if($duplicates) {
                    foreach ($duplicates as $duplicate) {
                        $duplicate->delete();
                    }
                }
            }
        }
    }
}
