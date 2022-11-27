<?php

use App\Http\Controllers\Api\SeanceApiController;
use App\Http\Controllers\Api\TicketApiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('/seance', [SeanceApiController::class, 'index'])->name('seance');
Route::post('/seance/store', [TicketApiController::class, 'store'])->name('store');
Route::post('/seance/remove', [TicketApiController::class, 'remove'])->name('remove');
