<form class="user" wire:submit.prevent="submit">
    <div class="form-group">
        <input type="tel" class="form-control form-control-user" wire:model.defer="phone" placeholder="เบอร์โทรศัพท์">
        @error('phone')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <input type="password" class="form-control form-control-user" wire:model.defer="password" placeholder="รหัสผ่าน">
        @error('password')
            <span class="fs-6 text-danger">{{ $message }}</span>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary btn-user btn-block">
        เข้าสู่ระบบ
    </button>
</form>
