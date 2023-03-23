<div class="container">
    <div class="row">
        <div class="col-md-12 col-lg-10 col-xl-7 col-xxl-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form wire:submit.prevent="submit">
                        <div class="row g-4">
                            <div class="col-12">
                                <label for="food" class="form-label">อาหารที่ทาน</label>
                                <div class="input-group d-flex flex-row-reverse">
                                    <select class="form-select" id="food" wire:model.defer="food_id">
                                        <option value="">กรุณาเลือกอาหารที่ทาน</option>
                                        @foreach ($foods as $food)
                                            <option value="{{ $food->id }}">{{ $food->name }}</option>
                                        @endforeach
                                    </select>
                                    <span class="input-group-text">
                                        <i class="bi bi-egg-fried"></i>
                                    </span>
                                </div>
                                @error('food_id')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="strength" class="form-label">
                                    ท่าที่ใช้ออกกำลังกาย
                                </label>
                                <div class="input-group d-flex flex-row-reverse">
                                    <select class="form-select" id="strength" wire:model.defer="posture_id">
                                        <option value="">
                                            กรุณาเลือกท่าที่ใช้ออกกำลังกาย
                                        </option>
                                        @foreach ($postures as $posture)
                                            <option value="{{ $posture->id }}">{{ $posture->name }}</option>
                                        @endforeach
                                    </select>
                                    <span class="input-group-text">
                                        <i class="bi bi-universal-access"></i>
                                    </span>
                                </div>
                                @error('posture_id')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="time-strength" class="form-label">
                                    เวลาที่ใช้ออกกำลังกาย
                                </label>
                                <div class="input-group d-flex flex-row-reverse">
                                    <select class="form-select" id="time-strength" wire:model.defer="time_exercising">
                                        <option value="">
                                            กรุณาเลือกเวลาที่ใช้ออกกำลังกาย
                                        </option>
                                        <option value="10">10 นาที</option>
                                        <option value="15">15 นาที</option>
                                        <option value="20">20 นาที</option>
                                        <option value="30">30 นาที</option>
                                        <option value="60">1 ชั่วโมง</option>
                                        <option value="90">
                                            1 ชั่วโมง 30 นาที
                                        </option>
                                        <option value="120">2 ชั่วโมง</option>
                                    </select>
                                    <span class="input-group-text">
                                        <i class="bi bi-stopwatch"></i>
                                    </span>
                                </div>
                                @error('time_exercising')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="feeling" class="form-label">
                                    สุขภาพจิต (อารมณ์ความรู้สึก)
                                </label>
                                <div class="d-block">
                                    <div class="btn-group" role="group">
                                        <input type="radio" class="btn-check" name="emotion" id="emotion1"
                                            autocomplete="off" value="good" wire:model.defer="emotion" />
                                        <label class="btn btn-check-primary smile" for="emotion1">
                                            <img src="{{ asset('assets/images/icons/emoji/smile.png') }}" />
                                            <span class="d-inline-block ms-2">ปกติ</span>
                                        </label>

                                        <input type="radio" class="btn-check" name="emotion" id="emotion4"
                                            autocomplete="off" value="poor" wire:model.defer="emotion" />
                                        <label class="btn btn-check-primary frown" for="emotion4">
                                            <img src="{{ asset('assets/images/icons/emoji/angry.png') }}" />
                                            <span class="d-inline-block ms-2">ไม่ดี</span>
                                        </label>
                                    </div>
                                </div>
                                @error('emotion')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="weight" class="form-label">
                                    น้ำหนัก
                                </label>
                                <div class="input-group d-flex flex-row-reverse">
                                    <select class="form-select" id="weight" wire:model.defer="weight">
                                        <option value="">
                                            กรุณาเลือกน้ำหนัก
                                        </option>
                                        @for ($i = 10; $i <= 200; $i++)
                                            <option value="{{ $i }}">
                                                {{ $i }}
                                            </option>
                                        @endfor

                                    </select>
                                    <span class="input-group-text">
                                        <i class="bi bi-stopwatch"></i>
                                    </span>
                                </div>
                                @error('weight')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="height" class="form-label">
                                    ส่วนสูง
                                </label>
                                <div class="input-group d-flex flex-row-reverse">
                                    <select class="form-select" id="height" wire:model.defer="height">
                                        <option value="">
                                            กรุณาเลือกส่วนสูง
                                        </option>
                                        @for ($i = 140; $i <= 200; $i++)
                                            <option value="{{ $i }}">
                                                {{ $i }}
                                            </option>
                                        @endfor
                                    </select>
                                    <span class="input-group-text">
                                        <i class="bi bi-stopwatch"></i>
                                    </span>
                                </div>
                                @error('height')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="col-12">
                                <label for="age" class="form-label">อายุ</label>
                                <div class="input-group d-flex flex-row-reverse">
                                    <input type="number" class="form-control" placeholder="กรุณากรอกอายุ"
                                        wire:model.defer="age" />
                                    <span class="input-group-text">
                                        <i class="bi bi-person-fill-up"></i>
                                    </span>
                                </div>
                                @error('age')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-page-btn text-center">
                                <button type="submit" class="btn btn-custom-primary w-100 shadow-none">
                                    ส่งข้อมูล
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
