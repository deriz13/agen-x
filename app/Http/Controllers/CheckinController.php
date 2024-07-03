<?php

namespace App\Http\Controllers;
use App\Models\Ticket; 

use Illuminate\Http\Request;

class CheckinController extends Controller
{
    public function index(Request $request)
    {
        $ticket_id = $request->query('ticket_id');
        $data['result'] = $ticket_id ? Ticket::where('ticket_id', $ticket_id)->first() : null;
        $data['message'] = $request->session()->get('message');
        $data['type'] = $request->session()->get('type');
        return view('admin.checkin.index', $data);
    }
    public function updateStatus(Request $request)
    {
        $request->validate([
            'ticket_id' => 'required',
        ]);
        $ticket_id = $request->input('ticket_id');
        $ticket = Ticket::where('ticket_id', $ticket_id)->first();
        if (!$ticket) {
            return redirect()->route('update.status', ['ticket_id' => $ticket_id])
                ->with('message', 'No ticket tidak ditemukan')
                ->with('type', 'danger');
        }
        if ($ticket->used) {
            return redirect()->route('update.status', ['ticket_id' => $ticket_id])
                ->with('message', 'Ticket tersebut sudah check-in')
                ->with('type', 'warning')
                ->with('result', $ticket);
        }
        $ticket->used = true;
        $ticket->save();
        return redirect()->route('update.status', ['ticket_id' => $ticket_id])
            ->with('message', 'Status berhasil diupdate')
            ->with('type', 'success')
            ->with('result', $ticket);
    }
}
