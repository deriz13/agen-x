@extends('admin.layouts.app')

@section('content')
<div class="card border-0 shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table id="dataTable" class="table table-centered table-nowrap mb-0 rounded">
                <thead class="thead-light">
                    <tr>
                        <th class="border-0 rounded-start">#</th>
                        <th class="border-0">Nama</th>
                        <th class="border-0">Alamat</th>
                        <th class="border-0">No Tlp</th>
                        <th class="border-0">Tahun Lahir</th>
                        <th class="border-0">No Ticket</th>
                        <th class="border-0 rounded-end">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reports as $report)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $report->name }}</td>
                        <td>{{ $report->address }}</td>
                        <td>{{ $report->no_tlp }}</td>
                        <td>{{ \Carbon\Carbon::parse($report->birthdate)->isoFormat('D MMMM YYYY') }}</td>
                        <td>{{ $report->ticket_id }}</td>
                        <td>
                            @if($report->used == 0)
                                <button class="btn btn-danger btn-sm">Belum terpakai</button>
                            @elseif($report->used == 1)
                                <button class="btn btn-primary btn-sm">Sudah terpakai</button>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
