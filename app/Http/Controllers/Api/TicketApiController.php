<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SeanceApiDeleteRequest;
use App\Http\Requests\SeanceApiStoreRequest;
use App\Services\TicketServices;
use Illuminate\Http\JsonResponse;

class TicketApiController extends Controller
{
    /**
     * @var TicketServices
     */
    private $services;

    public function __construct(TicketServices $services)
    {
        $this->services = $services;
    }

    public function store(SeanceApiStoreRequest $request): JsonResponse
    {
        if($request->validated()) {
            $ticket = $this->services->checkAndStoreTicket(
                $request->get('date_start'),
                $request->get('time_start'),
                $request->get('ticket')
                );

            if($ticket) {
                return response()->json(['success'=>'true', 'number' => $ticket->ticket]);
            }
        }
        return response()->json(['success'=>'false']);
    }

    public function remove(SeanceApiDeleteRequest $request): JsonResponse
    {
        if($request->validated()) {
            $ticket = $this->services->checkAndRemoveTicket(
                $request->get('date_start'),
                $request->get('time_start'),
                $request->get('ticket')
            );

            if($ticket) {
                return response()->json(['success'=>'true']);
            }
        }
        return response()->json(['success'=>'false']);
    }
}
