        <div class="history-page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() == 'history' ? 'active' : '' }}"
                                    aria-current="page" href="{{ route('history') }}">
                                    ประวัติการกรอกข้อมูลประจำวัน
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() == 'total-weight' ? 'active' : '' }}"
                                    href="{{ route('total-weight') }}">ผลรวมน้ำหนักทั้งหมดในแต่ละครั้ง</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() == 'calories-eating' ? 'active' : '' }}"
                                    href="{{ route('calories-eating') }}">
                                    แคลอรี่ของการกินและออกกำลังกาย
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() == 'total-calories' ? 'active' : '' }}"
                                    href="{{ route('total-calories') }}">
                                    แคลอรี่รวม
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
