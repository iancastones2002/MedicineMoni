<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'MMS') }}</title>

    <!-- Fonts and icons -->
    <link href="{{ asset('admin/css/material-dashboard.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>
    <div class="wrapper">
        @include('layouts.inc.sidebar')
        <div class="main-panel">
            @include('layouts.inc.adminnav')
            <div class="content">
                @yield('content')
            </div>
            @include('layouts.inc.adminfooter')
        </div>
    </div>

    <!-- Load jQuery from CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!-- Load DataTables from CDN -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <!-- Load other necessary scripts -->
    <script src="{{ asset('admin/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap-material-design.min.js') }}"></script>
    <script src="{{ asset('admin/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('admin/js/moment.min.js') }}"></script>
    <script src="{{ asset('admin/js/sweetalert2.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admin/js/material-dashboard.min.js') }}"></script>
    <script src="{{ asset('admin/js/chartist.min.js') }}"></script>
    <script src="{{ asset('admin/js/fullcalendar.min.js') }}"></script>

    <!-- Additional libraries -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    @if (session('status'))
        <script>
            swal("{{ session('status') }}");
        </script>
    @endif

    <script>
        function handleSubmit() {
            document.getElementById('form').submit();
        }

        $(document).ready(function() {
            $('#table').DataTable();

            var $sidebar = $('.sidebar');

            // Ensure sidebar toggle works
            $('.navbar-toggler').click(function() {
                $sidebar.toggleClass('active');
                $('body').toggleClass('nav-open');
            });

            // Check if function initSidebarsCheck exists and initialize
            if (typeof initSidebarsCheck === 'function') {
                initSidebarsCheck();
            }
        });
    </script>

    @yield('scripts')
</body>

</html>
