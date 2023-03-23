<form wire:submit.prevent="submit">
    <div class="card-body">
        <div class="text-center">
            <h1 class="auth-page-title">สมัครสมาชิก</h1>
        </div>

        <div class="row gx-3 gy-4">
            <div class="col-12">
                <div class="input-group d-flex flex-row-reverse">
                    <input type="text" class="form-control" placeholder="ชื่อ-นามสกุล" wire:model.defer="name" />
                    <span class="input-group-text">
                        <i class="bi bi-type"></i>
                    </span>
                </div>
                @error('name')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-12">
                <div class="input-group d-flex flex-row-reverse">
                    <input type="tel" class="form-control" placeholder="เบอร์โทรศัพท์" wire:model.defer="phone" />
                    <span class="input-group-text">
                        <i class="bi bi-telephone-fill"></i>
                    </span>
                </div>
                @error('phone')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-12">
                <div class="input-group d-flex flex-row-reverse">
                    <input type="password" class="form-control" placeholder="รหัสผ่าน" wire:model.defer="password" />
                    <span class="input-group-text">
                        <i class="bi bi-lock-fill"></i>
                    </span>
                </div>
                @error('password')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-12">
                <div class="input-group d-flex flex-row-reverse">
                    <input type="password" class="form-control" placeholder="ยืนยันรหัสผ่าน"
                        wire:model.defer="password_comfirm" />
                    <span class="input-group-text">
                        <i class="bi bi-lock-fill"></i>
                    </span>
                </div>
                @error('password_comfirm')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sex" id="male" value="man"
                        wire:model.defer="gender" />
                    <label class="form-check-label form-check-male" for="male">
                        <i class="bi bi-gender-male"></i><span class="d-inline-block ms-2">ชาย</span>
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sex" id="female" value="woman"
                        wire:model.defer="gender" />
                    <label class="form-check-label form-check-female" for="female">
                        <i class="bi bi-gender-female"></i><span class="d-inline-block ms-2">หญิง</span>
                    </label>
                </div>
                @error('gender')
                    <span class="error">{{ $message }}</span>
                @enderror
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
