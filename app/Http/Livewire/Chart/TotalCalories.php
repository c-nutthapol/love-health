<?php

namespace App\Http\Livewire\Chart;

use App\Models\DailyInfo;
use Livewire\Component;

class TotalCalories extends Component
{
    public function render()
    {
        return view('livewire.chart.total-calories');
    }

    public function chartData()
    {
        $get = DailyInfo::orderBy('created_at', 'ASC')->get();
        $labels = [];
        $array = [];
        foreach ($get as $data) {
            $labels[] = thaidate('d M y H:i:s', date("Y-m-d H:i:s", strtotime($data->created_at)));
            $array[] = $data->calories;
        }
        return [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'แคลอรี่รวมของกินและออกกำลังกาย',
                    'data' => $array,
                    'fill' => false,
                    'borderColor' => 'rgb(75, 192, 192)',
                    'tension' => 0.1,
                ]
            ]
        ];
    }
}
