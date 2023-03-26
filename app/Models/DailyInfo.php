<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyInfo extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function food()
    {
        return $this->belongsTo(Food::class, 'food_id', 'id');
    }

    public function posture()
    {
        return $this->belongsTo(ExercisePosture::class, 'posture_id', 'id');
    }
}
