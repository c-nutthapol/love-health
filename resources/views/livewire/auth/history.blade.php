<div class="history-page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-0 history-page-content__title">
                    ประวัติการกรอกข้อมูลประจำวัน
                </h1>
            </div>
        </div>
    </div>

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
                                <th class="text-center">แคลอรี่</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($daily_infos as $key => $daily_info)
                                <tr>
                                    <td class="text-center">{{ $daily_infos->firstItem() + $key }}</td>
                                    <td>{{ $daily_info->food->name }}</td>
                                    <td>{{ $daily_info->posture->name }}</td>
                                    <td>{{ $daily_info->time_exercising }} นาที</td>
                                    <td class="text-center">
                                        @if ($daily_info->emotion == 'good')
                                            <div>
                                                <img src="{{ asset('assets/images/icons/emoji/smile.png') }}"
                                                    width="32" />
                                                <span class="d-inline-block ms-2">ปกติ</span>
                                            </div>
                                        @else
                                            <div>
                                                <img src="{{ asset('assets/images/icons/emoji/angry.png') }}"
                                                    width="32" />
                                                <span class="d-inline-block ms-2">ไม่ดี</span>
                                            </div>
                                        @endif

                                    </td>
                                    <td class="text-center">{{ $daily_info->weight }} กก.</td>
                                    <td class="text-center">{{ $daily_info->height }} ซม.</td>
                                    <td class="text-center">{{ $daily_info->age }} ปี</td>
                                    <td class="text-center">{{ $daily_info->calories }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center"> ไม่พบข้อมูล </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            {{ $daily_infos->links('vendor.livewire.bootstrap') }}
        </div>
    </div>
</div>
