<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Seance;
use App\Services\SeanceServices;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SeanceApiController extends Controller
{
    /**
     * @var SeanceServices
     */
    private $services;

    public function __construct(SeanceServices $services)
    {
        $this->services = $services;
    }

    public function index(Request $request): JsonResponse
    {
        if($request->get('date') && $request->get('time')) {

            return response()->json($this->services->mapping($request->get('date'), $request->get('time')), 200);
        }
        return response()->json("Not Found", 200);
    }
}
