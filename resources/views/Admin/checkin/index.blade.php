@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card border-0 shadow mb-4">
            <div class="card-body d-flex align-items-center">
                <form action="{{ route('update.status') }}" method="POST" style="margin-right: 1in;" class="flex-grow-1">
                    @csrf
                    <div class="form-group mb-0">
                        <label for="ticket_id">Masukkan No Ticket</label>
                        <input type="text" class="form-control" id="ticket_id" name="ticket_id" value="{{ old('ticket_id', $ticket_id ?? '') }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@if (session('message'))
<div class="alert alert-{{ session('type') }}" role="alert">
    {{ session('message') }}
</div>
@endif

@if (isset($result))
<div class="card border-0 shadow mb-4">
    <div class="card-body">
        <p>Nama: {{ $result->name }}</p>
        <p>Alamat: {{ $result->address }}</p>
        <p>No Tlp: {{ $result->no_tlp }}</p>
        <p>Tahun Lahir: {{ \Carbon\Carbon::parse($result->birthdate)->isoFormat('D MMMM YYYY') }}</p>
        <p>No Ticket: {{ $result->ticket_id }}</p>
    </div>
</div>
@endif
@endsection