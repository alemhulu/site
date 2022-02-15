<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Charts\ResourcesByGrade as ResourcesGrade;

class ResourcesByGrade extends Component
{
    public function render(ResourcesGrade $chart)
    {
        return view('livewire.resources-by-grade',['chart'=>$chart->build()]);
    }
}
