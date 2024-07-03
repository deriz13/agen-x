<?php

namespace App\Http\Controllers;
use App\Models\Ticket; 

use Illuminate\Http\Request;

class CheckinController extends Controller
{
    public function index(Request $request)
    {
        $ticket_id = $request->query('ticket_id');
        $result = $ticket_id ? Ticket::where('ticket_id', $ticket_id)->first() : null;
        $message = $request->session()->get('message');
        $type = $request->session()->get('type');
        return view('admin.checkin.index', compact('result', 'ticket_id', 'message', 'type'));
    }
    public function updateStatus(Request $request)
    {
        // Validasi form input
        $request->validate([
            'ticket_id' => 'required',
        ]);

        // Ambil data dari form
        $ticket_id = $request->input('ticket_id');

        // Mencari data berdasarkan ticket_id
        $ticket = Ticket::where('ticket_id', $ticket_id)->first();

        // Jika data tidak ditemukan
        if (!$ticket) {
            return redirect()->route('update.status', ['ticket_id' => $ticket_id])
                ->with('message', 'No ticket tidak ditemukan')
                ->with('type', 'danger');
        }

        // Jika tiket sudah digunakan
        if ($ticket->used) {
            return redirect()->route('update.status', ['ticket_id' => $ticket_id])
                ->with('message', 'Ticket tersebut sudah check-in')
                ->with('type', 'warning')
                ->with('result', $ticket);
        }

        // Update kolom 'used' menjadi true atau 1
        $ticket->used = true;
        $ticket->save();

        // Jika data ditemukan dan berhasil diupdate, tampilkan pesan berhasil
        return redirect()->route('update.status', ['ticket_id' => $ticket_id])
            ->with('message', 'Status berhasil diupdate')
            ->with('type', 'success')
            ->with('result', $ticket);
    }
}
