@extends('layouts.app')

@section('title', 'ประวัติการกรอกข้อมูลประจำวัน')

@section('content')
    <section class="history-page">

        <div class="history-page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="mb-0 history-page-heading__title">
                            ประวัติการกรอกข้อมูลประจำวัน
                        </h1>
                    </div>
                </div>
            </div>
        </div>


        <div class="history-page-content">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">ลำดับที่</th>
                                        <th>อาหารที่ทาน</th>
                                        <th>ท่าที่ใช้ออกกำลังกาย</th>
                                        <th>เวลาที่ใช้ออกกำลังกาย</th>
                                        <th class="text-center">สุขภาพจิต (อารมณ์ความรู้สึก)</th>
                                        <th class="text-center">น้ำหนัก</th>
                                        <th class="text-center">ส่วนสูง</th>
                                        <th class="text-center">อายุ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>ข้าวขาหมู</td>
                                        <td>นั่งเฉยๆ</td>
                                        <td>30 นาที</td>
                                        <td class="text-center">
                                            <div>
                                                <img src="{{ asset('assets/images/icons/emoji/smile.png') }}"
                                                    width="32" />
                                                <span class="d-inline-block ms-2">ปกติ</span>
                                            </div>
                                        </td>
                                        <td class="text-center">50 กก.</td>
                                        <td class="text-center">175 ซม.</td>
                                        <td class="text-center">55 ปี</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>ข้าวขาหมู</td>
                                        <td>นั่งเฉยๆ</td>
                                        <td>30 นาที</td>
                                        <td class="text-center">
                                            <div>
                                                <img src="{{ asset('assets/images/icons/emoji/smile.png') }}"
                                                    width="32" />
                                                <span class="d-inline-block ms-2">ปกติ</span>
                                            </div>
                                        </td>
                                        <td class="text-center">50 กก.</td>
                                        <td class="text-center">175 ซม.</td>
                                        <td class="text-center">55 ปี</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td>ข้าวขาหมู</td>
                                        <td>นั่งเฉยๆ</td>
                                        <td>30 นาที</td>
                                        <td class="text-center">
                                            <div>
                                                <img src="{{ asset('assets/images/icons/emoji/smile.png') }}"
                                                    width="32" />
                                                <span class="d-inline-block ms-2">ปกติ</span>
                                            </div>
                                        </td>
                                        <td class="text-center">50 กก.</td>
                                        <td class="text-center">175 ซม.</td>
                                        <td class="text-center">55 ปี</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <nav>
                            <ul class="pagination justify-content-end">
                                <li class="page-item disabled">
                                    <a class="page-link">ก่อนหน้า</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">ถัดไป</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
