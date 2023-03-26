<?php

namespace App\Http\Livewire\Auth;

use App\Models\DailyInfo;
use Livewire\Component;
use Livewire\WithPagination;

class History extends Component
{
    use WithPagination;

    public function render()
    {
        $daily_infos = DailyInfo::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->paginate(10);
        return view('livewire.auth.history', compact('daily_infos'));
    }
}
