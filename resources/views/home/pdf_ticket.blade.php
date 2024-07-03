<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f0f0f0;
            padding: 20px;
        }
        .ticket-info {
            margin-bottom: 20px;
            background-color: #ffffff;
            padding: 20px;
            border: 1px solid #cccccc;
            border-radius: 5px;
        }
        .ticket-info p {
            margin-bottom: 10px;
        }
        .ticket-info strong {
            font-weight: bold;
        }
        .card-header {
            background-color: #007bff;
            color: #ffffff;
            padding: 10px;
            border-radius: 5px 5px 0 0;
        }
        .card-body {
            padding: 20px;
        }
        .card-footer {
            padding: 10px;
            text-align: center;
            background-color: #f0f0f0;
            border-top: 1px solid #cccccc;
            border-radius: 0 0 5px 5px;
        }
    </style>
</head>
<body>
    <div class="card ticket-card">
        <div class="card-header ticket-header">
            Ticket Anda
        </div>
        <div class="card-body ticket-body">
            <div class="ticket-info">
                <p><strong>Nama:</strong> {{ $ticket->name }}</p>
                <p><strong>Alamat:</strong> {{ $ticket->address }}</p>
                <p><strong>No HP:</strong> {{ $ticket->no_tlp }}</p>
                <p><strong>Tanggal Lahir:</strong> {{ \Carbon\Carbon::parse($ticket->birthdate)->isoFormat('D MMMM YYYY') }}</p>
                <p><strong>No Ticket:</strong> {{ $ticket->ticket_id }}</p>
            </div>
            <p><strong>Harap Bawa Ticket Ini Untuk Di tunjukan Kepada petugas</strong></p>
        </div>
    </div>
</body>
</html>