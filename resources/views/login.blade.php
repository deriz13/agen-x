
<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ url('assets/img/favicon/apple-touch-icon.png') }}" sizes="180x180">
    <link rel="icon" href="{{ url('assets/img/favicon/favicon-32x32.png') }}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{ url('assets/img/favicon/favicon-16x16.png') }}" sizes="16x16" type="image/png">

    <link rel="mask-icon" href="{{ url('assets/img/favicon/safari-pinned-tab.svg') }}" color="#563d7c">
    <link rel="icon" href="{{ url('assets/img/favicon/favicon.ico') }}">
    <meta name="msapplication-config" content="{{ url('assets/img/favicons/browserconfig.xml') }}">
    <meta name="theme-color" content="#563d7c">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    
    <!-- Apex Charts -->
    <link type="text/css" href="{{ url('vendor/apexcharts/apexcharts.css') }}" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Datepicker -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker-bs4.min.css">

    <!-- Fontawesome -->
    <link type="text/css" href="{{ url('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    
    <!-- Sweet Alert -->
    <link type="text/css" href="{{ url('vendor/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
    
    <!-- Notyf -->
    <link type="text/css" href="{{ url('vendor/notyf/notyf.min.css') }}" rel="stylesheet">
    
    <!-- Volt CSS -->
    <link type="text/css" href="{{ url('css/volt.css') }}" rel="stylesheet">

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

    <!-- Sweet Alerts 2 -->
    <script src="{{ url('assets/js/sweetalert2.all.min.js') }}"></script>

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
    
    
    <title>Login</title>
    <!-- Section -->
    <section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
        <div class="container">
            <p class="text-center">
            <div class="row justify-content-center form-bg-image">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                        <div class="text-center text-md-center mb-4 mt-md-0">
                            <h1 class="mb-0 h3">Login</h1>
                        </div>
                        <form action="{{ route('login.store') }}" method="POST" class="mt-4">
                        @csrf
                        @if (Session::has('error'))
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                            <div class="form-group mb-4">
                                <label for="email">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                                    </span>
                                    <input type="email" class="form-control" name="email" placeholder="Email" id="email" autofocus required>
                                </div>  
                            </div>
                            <!-- End of Form -->
                            <div class="form-group">
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="password">Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon2">
                                            <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path></svg>
                                        </span>
                                        <input type="password" placeholder="Password" name="password" class="form-control" id="password" required>
                                    </div>  
                                </div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-gray-800">Sign up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>