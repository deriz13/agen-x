<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\AuthController;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('create/ticket', [HomeController::class, 'creteTicket'])->name('ticket.store'); 
Route::get('ticket/{ticket_id}', [HomeController::class, 'showTicket'])->name('home.show_ticket');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginStore'])->name('login.store');