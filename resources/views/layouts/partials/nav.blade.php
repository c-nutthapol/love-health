    <nav class="navbar navbar-custom navbar-expand-lg">
        <div class="container d-flex align-items-center">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                <img src="{{ asset('assets/images/logo.png') }}" alt="logo" />
                <h1 class="mb-0"><span>H</span>ealthy<span>H</span>elp</h1>
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex align-items-center" id="collapsibleNavId">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                            href="{{ route('home') }}" aria-current="page">
                            หน้าหลัก
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'about' ? 'active' : '' }}"
                            href="{{ route('about') }}">เกี่ยวกับเรา</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'form' ? 'active' : '' }}"
                            href="{{ route('form') }}">กรอกข้อมูล</a>
                    </li>
                </ul>
                <div>
                    <a href="{{ route('register') }}" class="btn btn-custom-primary">
                        สมัครสมาชิก
                    </a>
                </div>
            </div>
        </div>
    </nav>
