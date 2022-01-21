<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Media;
use App\Models\Resources;

class documentStatus
{
    protected $chart;
    protected $totalDocument;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        $resources=Media::where('name','Document')->first()->resources;
        $viewCount=0;
        $downloadCount=0;
        $this->totalDocument=count($resources);
        foreach($resources as $resource){
            $viewCount+=$resource->view;
            $downloadCount+=$resource->download;
        }
        return $this->chart->donutChart()
            ->setTitle('Document Status')
            ->setSubtitle('By views and downloaded')
            ->addData([$viewCount, $downloadCount])
            ->setLabels(['Viewed', 'Downloaded']);
    }
}
