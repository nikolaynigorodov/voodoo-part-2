<?php


namespace App\Services;


use App\Models\Seance;

class SeanceServices
{
    public function mapping(string $date, string $timeFilm): array
    {
        $results = [];
        $times = [];
        $seancesTimes = Seance::where('date_start',$date)->orderByRaw('DATE(time_start)')->orderBy('time_start', 'asc')->get();
        foreach ($seancesTimes as $time) {
            $times[] = $time->time_start;
        }
        $seance = Seance::with(['tickets'])
            ->where('time_start', '=', $timeFilm)
            ->whereDate("date_start", '=', $date)->first();
        $results['time'] = $times;
        $results['seance'] = $seance;

        return $results;
    }
}
