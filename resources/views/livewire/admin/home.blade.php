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
                    @forelse ($daily_infos as $key => $daily_info)
                        <tr>
                            <td class="text-center">{{ $daily_info->name }}</td>
                            <td>{{ $daily_info->food->name }}</td>
                            <td>{{ $daily_info->posture->name }}</td>
                            <td class="text-center">
                                @if ($daily_info->emotion == 'good')
                                    <div>
                                        <img src="{{ asset('assets/images/icons/emoji/smile.png') }}" width="32" />
                                        <span class="d-inline-block ms-2">ปกติ</span>
                                    </div>
                                @else
                                    <div>
                                        <img src="{{ asset('assets/images/icons/emoji/angry.png') }}" width="32" />
                                        <span class="d-inline-block ms-2">ไม่ดี</span>
                                    </div>
                                @endif

                            </td>
                            <td class="text-center">{{ $daily_info->age }} ปี</td>
                            <td class="text-center">{{ $daily_info->calories }}</td>
                            <td class="text-right">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#viewModal-{{ $daily_info->id }}">
                                    ดูข้อมูลเพิ่มเติม
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center"> ไม่พบข้อมูล </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{ $daily_infos->links('vendor.livewire.bootstrap') }}

        <div>
            <!-- Modal -->
            @foreach ($daily_infos as $key => $daily_info)
                <div class="modal fade" id="viewModal-{{ $daily_info->id }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel-{{ $daily_info->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel-{{ $daily_info->id }}">รายละเอียด</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-2">
                                            <b>ชื่อ-นามสกุล</b>: <span>{{ $daily_info->name }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-2">
                                            <b>อาหารที่ทาน</b>: <span>{{ $daily_info->food->name }}</span>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <hr />
                                        <div class="mb-2">
                                            <b>ท่าที่ใช้ออกกำลังกาย</b>: <span>{{ $daily_info->posture->name }}</span>
                                        </div>
                                        <div class="mb-2">
                                            <b>เวลาที่ใช้ออกกำลังกาย</b>: <span>{{ $daily_info->time_exercising }}
                                                <span>นาที</span></span>
                                        </div>
                                        <hr />
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-2">
                                            <b>สุขภาพจิต (อารมณ์ความรู้สึก)</b>:
                                            @if ($daily_info->emotion == 'good')
                                                <div class="mt-1">
                                                    <img src="{{ asset('assets/images/icons/emoji/smile.png') }}"
                                                        width="32" />
                                                    <span class="d-inline-block ml-2">ปกติ</span>
                                                </div>
                                            @else
                                                <div class="mt-1">
                                                    <img src="{{ asset('assets/images/icons/emoji/angry.png') }}"
                                                        width="32" />
                                                    <span class="d-inline-block ml-2">ไม่ดี</span>
                                                </div>
                                            @endif
                                        </div>
                                        <hr />
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-2">
                                            <b>น้ำหนัก </b>: <span>{{ $daily_info->weight }} <span>กก.</span></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-2">
                                            <b>ส่วนสูง </b>: <span> {{ $daily_info->height }} <span>ซม.</span></span>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <hr />
                                        <div class="mb-2">
                                            <b>อายุ </b>: <span>{{ $daily_info->age }} <span>ปี</span></span>
                                        </div>
                                        <hr />
                                    </div>

                                    <div class="col-md-12">
                                        <div class="text-primary">
                                            <b>แคลอรี่ : <span>{{ $daily_info->calories }}</span></b>
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
            @endforeach
        </div>
    </div>
</div>
