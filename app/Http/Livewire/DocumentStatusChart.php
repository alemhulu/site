<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Charts\documentStatus;

class DocumentStatusChart extends Component
{
    public function render(documentStatus $chart)
    {
        return view('livewire.document-status-chart',['chart'=>$chart->build()]);
    }
}
