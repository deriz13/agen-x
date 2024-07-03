
<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Favicons -->
    <link rel="apple-touch-icon" href=".{{ url('/assets/img/favicon/apple-touch-icon.png') }}" sizes="180x180">
    <link rel="icon" href="{{ url('/assets/img/favicon/favicon-32x32.png') }}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{ url('/assets/img/favicon/favicon-16x16.png') }}" sizes="16x16" type="image/png">

    <link rel="mask-icon" href="{{ url('/assets/img/favicon/safari-pinned-tab.svg') }}" color="#563d7c">
    <link rel="icon" href="{{ url('/assets/img/favicon/favicon.ico') }}">
    <meta name="msapplication-config" content="{{ url('/assets/img/favicons/browserconfig.xml') }}">
    <meta name="theme-color" content="#563d7c">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    
    <!-- Apex Charts -->
    <link type="text/css" href="{{ url('/vendor/apexcharts/apexcharts.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Datepicker -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker-bs4.min.css">

    <!-- Fontawesome -->
    <link type="text/css" href="{{ url('/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    
    
    <!-- Notyf -->
    <link type="text/css" href="{{ url('/vendor/notyf/notyf.min.css') }}" rel="stylesheet">
    
    <!-- Volt CSS -->
    <link type="text/css" href="{{ url('/css/volt.css') }}" rel="stylesheet">

    <!-- Livewire Styles -->
<style >
    [wire\:loading], [wire\:loading\.delay], [wire\:loading\.inline-block], [wire\:loading\.inline], [wire\:loading\.block], [wire\:loading\.flex], [wire\:loading\.table], [wire\:loading\.grid], [wire\:loading\.inline-flex] {
        display: none;
    }

    [wire\:loading\.delay\.shortest], [wire\:loading\.delay\.shorter], [wire\:loading\.delay\.short], [wire\:loading\.delay\.long], [wire\:loading\.delay\.longer], [wire\:loading\.delay\.longest] {
        display:none;
    }

    [wire\:offline] {
        display: none;
    }

    [wire\:dirty]:not(textarea):not(input):not(select) {
        display: none;
    }

    input:-webkit-autofill, select:-webkit-autofill, textarea:-webkit-autofill {
        animation-duration: 50000s;
        animation-name: livewireautofill;
    }

    @keyframes livewireautofill { from {} }
</style>




    <!-- Core -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <!-- Vendor JS -->
    <script src="{{ url('assets/js/on-screen.umd.min.js') }}"></script>

    <!-- Slider -->
    <script src="{{ url('assets/js/nouislider.min.js') }}"></script>

    <!-- Smooth scroll -->
    <script src="{{ url('assets/js/smooth-scroll.polyfills.min.js') }}"></script>

    <!-- Apex Charts -->
    <script src="{{ url('vendor/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Charts -->
    <script src="{{ url('assets/js/chartist.min.js') }}"></script>
    <script src="{{ url('assets/js/chartist-plugin-tooltip.min.js') }}"></script>

    <!-- Datepicker -->
    <script src="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/js/datepicker.min.js"></script>
    <!-- Moment JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

    <!-- Notyf -->
    <script src="{{ url('vendor/notyf/notyf.min.js') }}"></script>

    <!-- Simplebar -->
    <script src="{{ url('assets/js/simplebar.min.js') }}"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    
    <!-- Volt JS -->
    <script src="{{ url('assets/js/volt.js') }}"></script>

</head>

<body>
       
    @include('admin.layouts.sidebar')
    
    <main class="content">
        @include('admin.layouts.header')

    <title wire:id="uLlXBH4NYCr8lrM31eav" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;uLlXBH4NYCr8lrM31eav&quot;,&quot;name&quot;:&quot;dashboard&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;dashboard&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;61b3ecd0&quot;,&quot;data&quot;:[],&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;77d58c3e9519f7dc78264db0f2287109a24c5914e717b3cfafeb1b421bd7b334&quot;}}">Volt Laravel Dashboard</title>

        @yield('content')


     @include('admin.layouts.footer')
    </main>
    
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables CSS (opsional) -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css">
<script src="{{ url('assets/js/sweetalert/sweetalert.min.js') }}"></script>
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true, 
            "autoWidth": false,
            "responsive": true,
            "language": {
                "search": "Cari:",
                "paginate": {
                    "previous": "Sebelumnya",
                    "next": "Berikutnya"
                },
                "lengthMenu": "Tampilkan _MENU_ entri",
                "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                "infoEmpty": "Menampilkan 0 sampai 0 dari 0 entri",
                "zeroRecords": "Data tidak ditemukan",
                "infoFiltered": "(difilter dari total _MAX_ entri)"
            }
        });
    });
</script>
</html>