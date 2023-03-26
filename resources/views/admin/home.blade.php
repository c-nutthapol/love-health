@extends('layouts.admin.app')

@section('title', 'หน้าหลัก')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">ข้อมูลผู้สูงอายุ</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ชื่อ-นามสกุล</th>
                                <th>อาหารที่ทาน</th>
                                <th>ท่าที่ใช้ออกกำลังกาย</th>
                                <th>สุขภาพจิต (อารมณ์ความรู้สึก)</th>
                                <th>อายุ</th>
                                <th>แคลอรี่</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>ก๋วยเตี๋ยวต้มยำ</td>
                                <td>นั่งเฉยๆ</td>
                                <td>
                                    <div>
                                        <img src="{{ asset('assets/images/icons/emoji/smile.png') }}" width="32" />
                                        <span class="d-inline-block ml-2">ปกติ</span>
                                    </div>
                                    {{-- <div>
                                        <img src="{{ asset('assets/images/icons/emoji/angry.png') }}" width="32" />
                                        <span class="d-inline-block ml-2">ไม่ดี</span>
                                    </div> --}}
                                </td>
                                <td>22
                                    <span class="ml-1">ปี</span>
                                </td>
                                <td>$320,800</td>
                                <td class="text-right">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#viewModal">
                                        ดูข้อมูลเพิ่มเติม
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-end">
                    <nav>
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">รายละเอียด</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-2">
                                <b>ชื่อ-นามสกุล</b>: <span>Tiger Nixon</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-2">
                                <b>อาหารที่ทาน</b>: <span>ก๋วยเตี๋ยวต้มยำ</span>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <hr />
                            <div class="mb-2">
                                <b>ท่าที่ใช้ออกกำลังกาย</b>: <span>นั่งเฉยๆ</span>
                            </div>
                            <div class="mb-2">
                                <b>เวลาที่ใช้ออกกำลังกาย</b>: <span>120 <span>นาที</span></span>
                            </div>
                            <hr />
                        </div>
                        <div class="col-md-12">
                            <div class="mb-2">
                                <b>สุขภาพจิต (อารมณ์ความรู้สึก)</b>:
                                <div class="mt-1">
                                    <img src="{{ asset('assets/images/icons/emoji/smile.png') }}" width="32" />
                                    <span class="d-inline-block ml-2">ปกติ</span>
                                </div>
                            </div>
                            <hr />
                        </div>

                        <div class="col-md-6">
                            <div class="mb-2">
                                <b>น้ำหนัก </b>: <span>50 <span>กก.</span></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-2">
                                <b>ส่วนสูง </b>: <span>175 <span>ซม.</span></span>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <hr />
                            <div class="mb-2">
                                <b>อายุ </b>: <span>22 <span>ปี</span></span>
                            </div>
                            <hr />
                        </div>

                        <div class="col-md-12">
                            <div class="text-primary">
                                <b>แคลอรี่ : <span>240</span></b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                </div>
            </div>
        </div>
    </div>
@endsection
