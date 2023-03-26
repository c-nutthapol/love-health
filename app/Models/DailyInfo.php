<?php

namespace App\Models;

use App\Traits\CalculateCaloriesTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyInfo extends Model
{
    use HasFactory, CalculateCaloriesTrait;

    protected $guarded = [];

    public function food()
    {
        return $this->belongsTo(Food::class, 'food_id', 'id');
    }

    public function posture()
    {
        return $this->belongsTo(ExercisePosture::class, 'posture_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function getCaloriesAttribute()
    {
        $bmr = $this->bmr($this->weight, $this->height, $this->age, $this->user->gender);
        $burned = $this->burned($this->time_exercising, $this->posture->calorie);
        return $this->calories($bmr, $this->food->calorie, $burned, $this->emotion);
    }
}
