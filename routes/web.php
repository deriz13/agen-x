<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TicketController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('create/ticket', [HomeController::class, 'creteTicket'])->name('ticket.store'); 
Route::get('ticket/{ticket_id}', [HomeController::class, 'showTicket'])->name('home.show_ticket');