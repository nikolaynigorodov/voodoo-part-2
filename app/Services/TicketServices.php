<?php


namespace App\Services;


use App\Models\Seance;
use App\Models\Ticket;

class TicketServices
{
    public function checkAndStoreTicket(string $date_start, string $time_start, int $ticket_number)
    {
        $seance = Seance::where('time_start', '=', $time_start)
            ->whereDate("date_start", '=', $date_start)->first();
        if($seance) {
            $id = $seance->id;
            $ticket = Ticket::create([
                'ticket' => $ticket_number,
                'seance_id' => $id
            ]);
            return $ticket;
        }
        return false;
    }

    public function checkAndRemoveTicket(string $date_start, string $time_start, int $ticket_number): bool
    {
        $seance = Seance::with(['tickets' => function($query) use ($ticket_number) {
            $query->where('ticket', '=', $ticket_number);
        }])
            ->where('time_start', '=', $time_start)
            ->whereDate("date_start", '=', $date_start)
            ->first();

        if($seance->tickets[0]->id) {
            $id = $seance->tickets[0]->id;
            $ticket = Ticket::find($id);
            if($ticket) $ticket->delete();
            return true;
        }
        return false;
    }
}
