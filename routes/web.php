<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CheckinController;
use App\Http\Controllers\LaporanController;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('create/ticket', [HomeController::class, 'creteTicket'])->name('ticket.store'); 
Route::get('ticket/{ticket_id}', [HomeController::class, 'showTicket'])->name('home.show_ticket');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginStore'])->name('login.store');
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('pesanan', [OrderController::class, 'index'])->name('order.index');
Route::get('check-in', [CheckinController::class, 'index'])->name('checkin.index');
Route::get('laporan', [LaporanController::class, 'index'])->name('report.index');