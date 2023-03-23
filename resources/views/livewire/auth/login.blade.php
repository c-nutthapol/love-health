<form wire:submit.prevent="submit">
    <div class="card-body">
        <div class="text-center">
            <h1 class="auth-page-title">เข้าสู่ระบบ</h1>
        </div>

        <div class="row gx-3 gy-4">
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
