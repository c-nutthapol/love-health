<?php

namespace Database\Seeders;

use App\Models\ExercisePosture;
use App\Models\Food;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $foods = [
            [
                'name' => 'ข้าวเจียว',
                'calorie' => 445,
            ],
            [
                'name' => 'กระเพราหมูสับ',
                'calorie' => 231.1,
            ],
            [
                'name' => 'ข้าวขาหมู',
                'calorie' => 690,
            ],
            [
                'name' => 'ข้าวยำไก่',
                'calorie' => 640,
            ],
            [
                'name' => 'ข้าวต้มปลา',
                'calorie' => 220,
            ],
            [
                'name' => 'ข้าวผัด',
                'calorie' => 163,
            ],
            [
                'name' => 'ข้าวหมูทอด',
                'calorie' => 193,
            ],
            [
                'name' => 'ข้าวเหนี่ยวหมูปิ้ง',
                'calorie' => 319,
            ],
            [
                'name' => 'ข้าวผัดไข่',
                'calorie' => 350,
            ],
            [
                'name' => 'ก๋วยเตี๋ยวต้มยำ',
                'calorie' => 310,
            ],
            [
                'name' => 'ก๋วยจั่บ',
                'calorie' => 240,
            ],
            [
                'name' => 'น้ำพริกปลาทู',
                'calorie' => 77.3,
            ],
            [
                'name' => 'ผัดซีอิ้วหมู',
                'calorie' => 730.4,
            ],
            [
                'name' => 'ข้าวไก่กระเทียม',
                'calorie' => 360,
            ],
            [
                'name' => 'ข้าวหน้าหมูกระเทียม',
                'calorie' => 550,
            ],
            [
                'name' => 'ข้าวไข่ข้น',
                'calorie' => 445,
            ],
        ];
        $exercisePostures = [
            [
                'name' => 'นั่งเฉยๆ',
                'calorie' => 14,
            ],
            [
                'name' => 'ปั่นจักรงาน',
                'calorie' => 500,
            ],
            [
                'name' => 'เต้นแอโรบิก',
                'calorie' => 500,
            ],
            [
                'name' => 'กายบริหาร',
                'calorie' => 220,
            ],
            [
                'name' => 'โยคะ',
                'calorie' => 600,
            ],
            [
                'name' => 'วิ่งจ๊อกกิ้ง',
                'calorie' => 800,
            ],
            [
                'name' => 'กระโดดเชือก',
                'calorie' => 780,
            ],
            [
                'name' => 'ว่ายน้ำ',
                'calorie' => 750,
            ],
            [
                'name' => 'เล่นฮูล่าฮูป',
                'calorie' => 430,
            ],
        ];

        foreach ($foods as $food) {
            Food::create($food);
        }
        foreach ($exercisePostures as $posture) {
            ExercisePosture::create($posture);
        }
    }
}
