<?php

namespace App\Http\Livewire;
use App\Charts\MonthlyViewsChart as Month;
use Livewire\Component;


class MonthlyViewsChart extends Component
{
    public function render(Month $chart)
    {
        return view('livewire.monthly-views-chart',['chart'=>$chart->build()]);
    }
}
