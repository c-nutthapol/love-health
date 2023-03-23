<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') . ' |' }} เข้าสู่ระบบ</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
    @livewireStyles
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@200;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
                            <form>
                                <div class="card-body">
                                    <div class="text-center">
                                        <h1 class="auth-page-title">เข้าสู่ระบบ</h1>
                                    </div>

                                    <div class="row gx-3 gy-4">
                                        <div class="col-12">
                                            <div class="input-group d-flex flex-row-reverse">
                                                <input type="tel" class="form-control"
                                                    placeholder="เบอร์โทรศัพท์" />
                                                <span class="input-group-text">
                                                    <i class="bi bi-telephone-fill"></i>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="input-group d-flex flex-row-reverse">
                                                <input type="password" class="form-control" placeholder="รหัสผ่าน" />
                                                <span class="input-group-text">
                                                    <i class="bi bi-lock-fill"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="auth-page-btn text-center">
                                        <button type="submit" class="btn btn-custom-primary w-100 shadow-none">
                                            เข้าสู่ระบบ
                                        </button>
                                        <p class="mt-3 mb-0 p-0">
                                            ถ้าคุณไม่มีบัญชี?
                                            <a href="{{ route('register') }}" class="link"> สมัครสมาชิก </a>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
