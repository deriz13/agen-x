<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $data['tickets'] = Ticket::get();

        return view('tickets.index', $data);
    }
}
