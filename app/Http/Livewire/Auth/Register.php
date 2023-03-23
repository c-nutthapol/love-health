<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Register extends Component
{
    use LivewireAlert;

    public function render()
    {
        return view('livewire.auth.register');
    }

    public $name, $phone, $password, $password_comfirm, $gender;

    protected $rules = [
        'phone' => 'required|numeric|digits:10|unique:users,phone',
        'password' => 'required|min:8',
        'password_comfirm' => 'required|same:password',
        'name' => 'required|max:255',
        'gender' => 'required|in:man,woman',
    ];

    protected $attributes = [
        'phone' => 'เบอร์โทรศัพท์',
        'password' => 'รหัสผ่าน',
        'password_comfirm' => 'ยืนยันรหัสผ่าน',
        'name' => 'ชื่อ-นามสกุล',
        'gender' => 'เพศ',
    ];


    public function submit()
    {
        $validatedData = $this->validate($this->rules, __('validation'), $this->attributes);
        try {
            unset($validatedData['password_comfirm']);
            $create = User::create($validatedData);
            if ($create) {
                Auth::login($create);
                $this->alert('success', 'สมัครสมาชิคสำเร็จ', [
                    'position' => 'bottom-end',
                    'timer' => 3000,
                    'toast' => true,
                ]);
                $this->emit('redirect_page', ['url' => route('login')]);
            }
        } catch (\Exception $e) {
            $this->alert('error', 'เกิดข้อผิดพลาด', [
                'text' => $e->getMessage(),
                'position' => 'bottom-end',
                'timer' => 3000,
                'toast' => true,
            ]);
        }
    }
}
