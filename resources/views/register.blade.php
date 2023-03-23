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
                                        <h1 class="auth-page-title">สมัครสมาชิก</h1>
                                    </div>

                                    <div class="row gx-3 gy-4">
                                        <div class="col-12">
                                            <div class="input-group d-flex flex-row-reverse">
                                                <input type="text" class="form-control" placeholder="ชื่อ-นามสกุล" />
                                                <span class="input-group-text">
                                                    <i class="bi bi-type"></i>
                                                </span>
                                            </div>
                                        </div>

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

                                        <div class="col-12">
                                            <div class="input-group d-flex flex-row-reverse">
                                                <input type="password" class="form-control"
                                                    placeholder="ยืนยันรหัสผ่าน" />
                                                <span class="input-group-text">
                                                    <i class="bi bi-lock-fill"></i>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sex"
                                                    id="male" value="ชาย" />
                                                <label class="form-check-label form-check-male" for="male">
                                                    <i class="bi bi-gender-male"></i><span
                                                        class="d-inline-block ms-2">ชาย</span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sex"
                                                    id="female" value="หญิง" />
                                                <label class="form-check-label form-check-female" for="female">
                                                    <i class="bi bi-gender-female"></i><span
                                                        class="d-inline-block ms-2">หญิง</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="auth-page-btn text-center">
                                        <button type="submit" class="btn btn-custom-primary w-100 shadow-none">
                                            สมัครสมาชิก
                                        </button>
                                        <p class="mt-3 mb-0 p-0">
                                            ถ้าคุณมีบัญชีอยู่แล้ว?
                                            <a href="{{ route('login') }}" class="link"> เข้าสู่ระบบ </a>
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
</body>

</html>
