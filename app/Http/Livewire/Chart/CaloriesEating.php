<?php

namespace App\Http\Livewire\Chart;

use App\Models\DailyInfo;
use Livewire\Component;

class CaloriesEating extends Component
{
    public function render()
    {
        return view('livewire.chart.calories-eating');
    }

    public function chartData()
    {
        $get = DailyInfo::orderBy('created_at', 'ASC')->get();
        $labels = [];
        $eating = [];
        $exercise = [];
        foreach ($get as $label => $data) {
            $labels[] = thaidate('d M y H:i:s', date("Y-m-d H:i:s", strtotime($data->created_at)));
            $eating[] = $data->eating;
            $exercise[] = $data->burned;
        }
        return [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'การรับประทานอาหาร',
                    'data' => $eating,
                    'fill' => false,
                    'borderColor' => '#9BD0F5',
                    'tension' => 0.1,
                ],
                [
                    'label' => 'การออกกำลังกาย',
                    'data' => $exercise,
                    'fill' => false,
                    'borderColor' => '#FFB1C1',
                    'tension' => 0.1,
                ]
            ]
        ];
    }
}
