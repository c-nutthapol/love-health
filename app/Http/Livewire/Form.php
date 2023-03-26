<?php

namespace App\Http\Livewire;

use App\Models\DailyInfo;
use App\Models\ExercisePosture;
use App\Models\Food;
use App\Traits\CalculateCaloriesTrait;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Form extends Component
{
    use LivewireAlert, CalculateCaloriesTrait;

    public function render()
    {
        $foods = Food::get();
        $postures = ExercisePosture::get();

        return view('livewire.form', compact(
            'foods',
            'postures'
        ));
    }

    public $food_id, $posture_id, $time_exercising, $emotion, $weight, $height, $age;

    protected $rules = [
        'food_id' => 'required|exists:food,id',
        'posture_id' => 'required|exists:exercise_postures,id',
        'time_exercising' => 'required|numeric|in:10,15,20,30,60,90,120',
        'emotion' => 'required|in:good,poor',
        'weight' => 'required',
        'height' => 'required',
        'age' => 'required|numeric'
    ];

    protected $attributes = [
        'food_id' => 'อาหารที่ทาน',
        'posture_id' => 'ท่าที่ใช้ออกกำลังกาย',
        'time_exercising' => 'เวลาที่ใช้ออกกำลังกาย',
        'emotion' => 'สุขภาพจิต',
        'weight' => 'น้ำหนัก',
        'height' => 'ส่วนสูง',
        'age' => 'อายุ'
    ];

    public function submit()
    {
        $validatedData = $this->validate($this->rules, __('validation'), $this->attributes);
        try {
            $validatedData['user_id'] = auth()->user()->id;
            $posture = ExercisePosture::find($validatedData['posture_id']);
            $food = Food::find($validatedData['food_id']);
            $bmr = $this->bmr($validatedData['weight'], $validatedData['height'], $validatedData['age'], auth()->user()->gender);
            $burned = $this->burned($validatedData['time_exercising'], $posture->calorie);
            $calories = $this->caloriesRecommend($bmr, $food->calorie, $burned, $validatedData['emotion']);
            $this->alert('success', 'คำนวนแคลอรี่เสร็จสิ้น', [
                'text' => $calories,
                'position' => 'center',
                'timer' => '',
                'toast' => false,
                'showConfirmButton' => true,
                'confirmButtonText' => 'ตกลง',
            ]);

            DailyInfo::create($validatedData);
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
