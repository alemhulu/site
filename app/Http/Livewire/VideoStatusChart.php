<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Charts\videoStatus;

class VideoStatusChart extends Component
{
    public function render(videoStatus $chart)
    {
        return view('livewire.video-status-chart',['chart'=>$chart->build()]);
    }
}
