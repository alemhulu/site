<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Media;
use App\Models\Resources;

class videoStatus
{
    protected $chart;
    protected $totalVideo;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        $resources=Media::where('name','Video')->first()->resources;
        $viewCount=0;
        $downloadCount=0;
        $total=0;
        $this->totalVideo=count($resources);
        foreach($resources as $resource){
            $viewCount+=$resource->view;
            $downloadCount+=$resource->download;
        }
        $total=$viewCount+$downloadCount;
        return $this->chart->donutChart()
            ->setTitle('Video Status')
            ->setSubtitle('Total amount of video viewed and downloaded : '. $total)
            ->addData([$viewCount, $downloadCount])
            ->setLabels(['Viewed', 'Downloaded']);
    }
}
