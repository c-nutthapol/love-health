<?php

namespace App\Http\Livewire\Auth;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Login extends Component
{
    use LivewireAlert;

    public function render()
    {
        return view('livewire.auth.login');
    }

    public $phone, $password;

    protected $rules = [
        'phone' => 'required|numeric|digits:10',
        'password' => 'required|min:8',
    ];

    protected $attributes = [
        'phone' => 'เบอร์โทรศัพท์',
        'password' => 'รหัสผ่าน',
    ];


    public function submit()
    {
        $validatedData = $this->validate($this->rules, __('validation'), $this->attributes);
        try {
            $username = $validatedData['phone'];
            $password = $validatedData['password'];

            if (auth()->attempt(['phone' => $username, 'password' => $password])) {
                $this->alert('success', 'เข้าสู่ระบบสำเร็จ', [
                    'position' => 'bottom-end',
                    'timer' => 3000,
                    'toast' => true,
                ]);
                $this->emit('redirect_page', ['url' => route('home')]);
            } else {
                $this->alert('error', 'เกิดข้อผิดพลาด', [
                    'position' => 'bottom-end',
                    'text' => 'ไม่สามารถเข้าสู่ระบบได้กรุณาตรวจสอบข้อมูลให้ถูกต้อง',
                    'timer' => 3000,
                    'toast' => true,
                ]);
            }
        } catch (\Exception $e) {
            $this->emit('alert', ['status' => 'error', 'title' => 'เกิดข้อผิดพลาด', 'text' => $e->getMessage()]);
        }
    }
}
