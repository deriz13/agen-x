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
                        <th class="border-0 rounded-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $order->name }}</td>
                        <td>{{ $order->address }}</td>
                        <td>{{ $order->no_tlp }}</td>
                        <td>{{ \Carbon\Carbon::parse($order->birthdate)->isoFormat('D MMMM YYYY') }}</td>
                        <td>{{ $order->ticket_id }}</td>
                        <td>
                            <a href="" class="btn btn-sm btn-primary">Edit</a>
                            <form action="" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
