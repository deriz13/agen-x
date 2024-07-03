@extends('home.layouts.app')

@section('content')
<div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
    <div class="card ticket-card">
        <div class="card-header ticket-header">
            Ticket Berhasil Dibuat
        </div>
        <div class="card-body ticket-body">
            <div class="ticket-info">
                <p><strong>Nama:</strong> {{ $ticket->name }}</p>
                <p><strong>Alamat:</strong> {{ $ticket->address }}</p>
                <p><strong>No HP:</strong> {{ $ticket->no_tlp }}</p>
                <p><strong>Tanggal Lahir:</strong> {{ \Carbon\Carbon::parse($ticket->birthdate)->isoFormat('D MMMM YYYY') }}</p>
                <p><strong>No Ticket:</strong> {{ $ticket->ticket_id }}</p>
            </div>
        </div>
        <div class="card-footer ticket-footer">
            <a href="{{ route('home') }}" class="btn btn-secondary">Kembali</a>
        </div>
     </div>
</div>
@endsection