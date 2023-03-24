<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') . ' |' }} สมัครสมาชิก</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
    @livewireStyles
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@200;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link href="{{ asset('assets/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
</head>

<body>


    <section class="auth-page d-flex align-items-center">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xl-6 col-xxl-5 mx-auto">
                        <div class="card">
                            <a href="{{ route('home') }}" class="card-back d-flex align-items-center">
                                <i class="bi bi-arrow-left"></i>
                                <span class="ms-2">กลับ</span>
                            </a>
                            @livewire('auth.register')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('vendor/livewire-alert/livewire-alert.js') }}"></script>
    <x-livewire-alert::flash />
    <script src="{{ asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
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
