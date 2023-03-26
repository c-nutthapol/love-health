<?php

namespace App\Traits;

trait CalculateCaloriesTrait
{
    /**
     * *|MARCADOR_CURSOR|*
     *
     * @param weight Your weight in kilograms
     * @param height in cm
     * @param age Your age in years
     */
    public function bmr($weight, $height, $age, $gender)
    {
        if ($gender == 'male') {
            $bmr = 88.362 + (13.397 * $weight) + (4.799 * $height) - (5.677 * $age);
        } else {
            $bmr = 447.593 + (9.247 * $weight) + (3.098 * $height) - (4.330 * $age);
        }
        return $bmr;
    }

    public function burned($exerciseTime, $burned_hour)
    {
        return $exerciseTime * ($burned_hour / 60);
    }

    public function calories($bmr, $consumed, $burned, $mentalHealth)
    {

        if ($mentalHealth == 'good') {
            $burned *= 1.1;
        } else if ($mentalHealth == 'poor') {
            $burned *= 0.9;
        }

        // Calculate BMR and total calories for the day
        $total = round($bmr + $consumed - $burned);

        if ($total < 1200) {
            return 'คุณต้อง "เพิ่มอาหารการกิน" ในแต่ละวัน แคลอรี่ของคุณ ' . $total;
        } else if ($total > 2500) {
            return 'คุณต้อง "ลดอาหารการกิน หรือออกกำลังกายเพิ่มเติม" ในแต่ละวัน แคลอรี่ของคุณ ' . $total;
        } else {
            return 'ปริมาณแคลอรี่ในแต่ละวันของคุณอยู่ในช่วงที่แนะนำ แคลอรี่ของคุณ ' . $total;
        }
    }
}
