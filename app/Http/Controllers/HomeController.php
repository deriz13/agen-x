<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use Illuminate\Support\Str;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\View;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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
            return redirect()->back()->withError('Ticket gagal dibuat');
        }
    }

    public function showTicket($ticket_id)
    {
        $data['ticket'] = Ticket::where('ticket_id', $ticket_id)->firstOrFail();
        $ticketData = "Nama: " . $data['ticket']->name . "\n" .
                  "Alamat: " . $data['ticket']->address . "\n" .
                  "No HP: " . $data['ticket']->no_tlp . "\n" .
                  "Tanggal Lahir: " . \Carbon\Carbon::parse($data['ticket']->birthdate)->isoFormat('D MMMM YYYY') . "\n" .
                  "No Ticket: " . $data['ticket']->ticket_id;
        $data['qrCode'] = QrCode::size(200)->generate($ticketData);
        return view('home.show_ticket', $data);
    }

    public function downloadPDF($ticket_id)
    {
        $ticket = Ticket::where('ticket_id', $ticket_id)->first();
        
        if (!$ticket) {
            abort(404);
        }
        $data = [
            'ticket' => $ticket
        ];
        $html = View::make('home.pdf_ticket', $data)->render();

        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4', 'portrait');

        $dompdf->render();

        return $dompdf->stream('ticket.pdf');
    }
}