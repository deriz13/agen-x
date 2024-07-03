@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-12 col-xl-8">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h2 class="fs-5 fw-bold mb-0">Ticket Yang Belum Chekin</h2>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="dataTable" class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th class="border-0 rounded-start">#</th>
                                <th class="border-0">Nama</th>
                                <th class="border-0">Alamat</th>
                                <th class="border-0">No Tlp</th>
                                <th class="border-0">Tahun Lahir</th>
                                <th class="border-0">No Ticket</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($unuseds as $unused)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $unused->name }}</td>
                                    <td>{{ $unused->address }}</td>
                                    <td>{{ $unused->no_tlp }}</td>
                                    <td>{{ \Carbon\Carbon::parse($unused->birthdate)->isoFormat('D MMMM YYYY') }}</td>
                                    <td>{{ $unused->ticket_id }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h2 class="fs-5 fw-bold mb-0">Ticket Yang Sudah Chekin</h2>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="dataTable2" class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th class="border-0 rounded-start">#</th>
                                <th class="border-0">Nama</th>
                                <th class="border-0">Alamat</th>
                                <th class="border-0">No Tlp</th>
                                <th class="border-0">Tahun Lahir</th>
                                <th class="border-0">No Ticket</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($useds as $used)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $used->name }}</td>
                                    <td>{{ $used->address }}</td>
                                    <td>{{ $used->no_tlp }}</td>
                                    <td>{{ \Carbon\Carbon::parse($used->birthdate)->isoFormat('D MMMM YYYY') }}</td>
                                    <td>{{ $used->ticket_id }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-xl-4">
    <div class="card border-0 shadow">
        <div class="card-header">
            <h2 class="fs-5 fw-bold mb-0">Total Orders</h2>
        </div>
        <div class="card-body">
            <canvas id="pieChart" width="400" height="400"></canvas>
        </div>
    </div>
</div>
</div>
<script>
    var ctx = document.getElementById('pieChart').getContext('2d');
    var myPieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Total Pesanan'],
            datasets: [{
                label: 'Total Pesanan',
                data: [{{ $countticket }}],
                backgroundColor: [
                    '#007bff',
                ],
                borderColor: [
                    '#ffffff',
                ],
                borderWidth: 5
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            return tooltipItem.label + ': ' + tooltipItem.raw.toFixed(0);
                        }
                    }
                }
            }
        }
    });
</script>
@endsection
