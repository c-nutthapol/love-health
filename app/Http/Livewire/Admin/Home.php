<?php

namespace App\Http\Livewire\Admin;

use App\Models\DailyInfo;
use Livewire\Component;
use Livewire\WithPagination;

class Home extends Component
{
    use WithPagination;

    public function render()
    {
        $daily_infos = DailyInfo::orderBy('id', 'DESC')->paginate(10);

        return view('livewire.admin.home', compact('daily_infos'));
    }
}
