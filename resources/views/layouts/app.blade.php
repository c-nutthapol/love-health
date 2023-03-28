<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') . ' |' }} @yield('title')
        @hasSection('subtitle')
            | @yield('subtitle')
        @endif
    </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
    @livewireStyles
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@200;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link href="{{ asset('assets/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
</head>

<body>
    @include('layouts.partials.nav')

    @yield('content')

    @include('layouts.partials.footer')


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('vendor/livewire-alert/livewire-alert.js') }}"></script>
    <x-livewire-alert::flash />
    @yield('script')
    @stack('script')
    <script src="{{ asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        $("a[target=popup]").click(function() {
            let href = $(this).prop('href');
            window.open(href, 'popup', 'width=600,height=600,scrollbars=yes');
        });

        Livewire.on("redirect_page", event => {
            let url = event.url
            let delay = event.delay ?? 3000
            setTimeout(function() {
                window.location = url;
            }, delay);
        });
    </script>
</body>

</html>
