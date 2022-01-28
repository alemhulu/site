<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Resource;
use App\Models\Media;

class MonthlyViewsChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {   
        $video=Media::where('name','Video')->first()->resources;
        $document=Media::where('name','Document')->first()->resources;
        $audio=Media::where('name','Audio')->first();
        $resources=count(Resource::all());
        if($audio==null){
            $audio=0;
        }else{
            $audio=count($audio->resources);
        }
        return $this->chart->pieChart()
            ->setTitle('Available Resources')
            ->setSubtitle('Total available resources : '.$resources)
            ->addData([count($video), count($document), $audio])
            ->setLabels(['Video', 'Document', 'Audio']);
    }
}
