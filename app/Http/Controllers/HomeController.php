<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public static function generateTicketId()
{
    do {
        $ticketId = '' . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
    } while (Ticket::where('ticket_id', $ticketId)->exists());

    return $ticketId;
}

    public function creteTicket(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'no_tlp' => 'required',
            'birthdate' => 'required|date',
        ]);

        try {
            $ticketId = self::generateTicketId();

            $ticket = Ticket::create([
                'ticket_id' => $ticketId,
                'name' => $request->name,
                'address' => $request->address,
                'no_tlp' => $request->no_tlp,
                'birthdate' => $request->birthdate,
                'used' => 0,
            ]);

            return redirect(route('home.show_ticket', $ticket->ticket_id))
            ->withSuccess("Ticket berhasil dibuat");
                
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->withError('Ticket gagal dibuat');
        }
    }

    public function showTicket($ticket_id)
    {
        $data['ticket'] = Ticket::where('ticket_id', $ticket_id)->firstOrFail();

        return view('home.show_ticket', $data);
    }
}