<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Resource;
use App\Models\Media;
use App\Models\Grade;
use App\Models\Report;

class ResourcesByGrade
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        /* Grade 12 */
        $grade12=Grade::where('name','12')->first();
        
        if(Media::where('name','Document')->first()==Null){
            $documentId=0;
        }else{
            $documentId=Media::where('name','Document')->first()->id;
        }
        
        if(Media::where('name','Video')->first()==Null){
            $videoId=0;
        }else{
            $videoId=Media::where('name','Video')->first()->id;
        }
        
        if(Media::where('name','Audio')->first()==Null){
            $audioId=0;
        }else{
            $audioId=Media::where('name','Audio')->first()->id;
        }
        /* 
        Grade report insert by media type
        */
        
        $datas[]=[];
        

        if($grade12==Null){
            $grade12Document=0;
            $grade12Video=0;
            $grade12Audio=0;
        }else{
            $grade12Document=count($grade12->resources->where('media_id',$documentId));
            $grade12Video=count($grade12->resources->where('media_id',$videoId));
            $grade12Audio=count($grade12->resources->where('media_id',$audioId));
            
            /* 
            Grade 12 Resource available data
            */
            $datas[0][0]=[
                'grade_id'=> $grade12->id,
                'media_id'=> $documentId,
                'totalAvailableResources'=> $grade12Document
            ];
            $datas[0][1]=[
                'grade_id'=> $grade12->id,
                'media_id'=> $videoId,
                'totalAvailableResources'=> $grade12Video
            ];
            $datas[0][2]=[
                'grade_id'=> $grade12->id,
                'media_id'=> $audioId,
                'totalAvailableResources'=> $grade12Audio
            ];
            
        }
       
       
        

        /* Grade 11 */
        $grade11=Grade::where('name','11')->first();

        
        if(Media::where('name','Document')->first()==Null){
            $documentId=0;
        }else{
            $documentId=Media::where('name','Document')->first()->id;
        }
        
        if(Media::where('name','Video')->first()==Null){
            $videoId=0;
        }else{
            $videoId=Media::where('name','Video')->first()->id;
        }
        
        if(Media::where('name','Audio')->first()==Null){
            $audioId=0;
        }else{
            $audioId=Media::where('name','Audio')->first()->id;
        }
        if($grade11==Null){
            $grade11Document=0;
            $grade11Video=0;
            $grade11Audio=0;
        }else{
            $grade11Document=count($grade11->resources->where('media_id',$documentId));
            $grade11Video=count($grade11->resources->where('media_id',$videoId));
            $grade11Audio=count($grade11->resources->where('media_id',$audioId));

            /* 
            Grade 11 Resource available data
            */
            $datas[1][0]=[
                'grade_id'=> $grade11->id,
                'media_id'=> $documentId,
                'totalAvailableResources'=> $grade11Document
            ];
            $datas[1][1]=[
                'grade_id'=> $grade11->id,
                'media_id'=> $videoId,
                'totalAvailableResources'=> $grade11Video
            ];
            $datas[1][2]=[
                'grade_id'=> $grade11->id,
                'media_id'=> $audioId,
                'totalAvailableResources'=> $grade11Audio
            ];
        }

        /* Grade 10 */
        $grade10=Grade::where('name','10')->first();

        
        if(Media::where('name','Document')->first()==Null){
            $documentId=0;
        }else{
            $documentId=Media::where('name','Document')->first()->id;
        }
        
        if(Media::where('name','Video')->first()==Null){
            $videoId=0;
        }else{
            $videoId=Media::where('name','Video')->first()->id;
        }
        
        if(Media::where('name','Audio')->first()==Null){
            $audioId=0;
        }else{
            $audioId=Media::where('name','Audio')->first()->id;
        }
        if($grade10==Null){
            $grade10Document=0;
            $grade10Video=0;
            $grade10Audio=0;
        }else{
            $grade10Document=count($grade10->resources->where('media_id',$documentId));
            $grade10Video=count($grade10->resources->where('media_id',$videoId));
            $grade10Audio=count($grade10->resources->where('media_id',$audioId));

            /* 
            Grade 11 Resource available data
            */
            $datas[2][0]=[
                'grade_id'=> $grade10->id,
                'media_id'=> $documentId,
                'totalAvailableResources'=> $grade10Document
            ];
            $datas[2][1]=[
                'grade_id'=> $grade10->id,
                'media_id'=> $videoId,
                'totalAvailableResources'=> $grade10Video
            ];
            $datas[2][2]=[
                'grade_id'=> $grade10->id,
                'media_id'=> $audioId,
                'totalAvailableResources'=> $grade10Audio
            ];
        }

        /* Grade 9 */
        $grade9=Grade::where('name','9')->first();

        
        if(Media::where('name','Document')->first()==Null){
            $documentId=0;
        }else{
            $documentId=Media::where('name','Document')->first()->id;
        }
        
        if(Media::where('name','Video')->first()==Null){
            $videoId=0;
        }else{
            $videoId=Media::where('name','Video')->first()->id;
        }
        
        if(Media::where('name','Audio')->first()==Null){
            $audioId=0;
        }else{
            $audioId=Media::where('name','Audio')->first()->id;
        }
        if($grade9==Null){
            $grade9Document=0;
            $grade9Video=0;
            $grade9Audio=0;
        }else{
            $grade9Document=count($grade9->resources->where('media_id',$documentId));
            $grade9Video=count($grade9->resources->where('media_id',$videoId));
            $grade9Audio=count($grade9->resources->where('media_id',$audioId));

            /* 
            Grade 9 Resource available data
            */
            $datas[3][0]=[
                'grade_id'=> $grade9->id,
                'media_id'=> $documentId,
                'totalAvailableResources'=> $grade9Document
            ];
            $datas[3][1]=[
                'grade_id'=> $grade9->id,
                'media_id'=> $videoId,
                'totalAvailableResources'=> $grade9Video
            ];
            $datas[3][2]=[
                'grade_id'=> $grade9->id,
                'media_id'=> $audioId,
                'totalAvailableResources'=> $grade9Audio
            ];
        }

        /* Grade 8 */
        $grade8=Grade::where('name','8')->first();

        
        if(Media::where('name','Document')->first()==Null){
            $documentId=0;
        }else{
            $documentId=Media::where('name','Document')->first()->id;
        }
        
        if(Media::where('name','Video')->first()==Null){
            $videoId=0;
        }else{
            $videoId=Media::where('name','Video')->first()->id;
        }
        
        if(Media::where('name','Audio')->first()==Null){
            $audioId=0;
        }else{
            $audioId=Media::where('name','Audio')->first()->id;
        }
        if($grade8==Null){
            $grade8Document=0;
            $grade8Video=0;
            $grade8Audio=0;
        }else{
            $grade8Document=count($grade8->resources->where('media_id',$documentId));
            $grade8Video=count($grade8->resources->where('media_id',$videoId));
            $grade8Audio=count($grade8->resources->where('media_id',$audioId));

            /* 
            Grade 8 Resource available data
            */
            $datas[4][0]=[
                'grade_id'=> $grade8->id,
                'media_id'=> $documentId,
                'totalAvailableResources'=> $grade8Document
            ];
            $datas[4][1]=[
                'grade_id'=> $grade8->id,
                'media_id'=> $videoId,
                'totalAvailableResources'=> $grade8Video
            ];
            $datas[4][2]=[
                'grade_id'=> $grade8->id,
                'media_id'=> $audioId,
                'totalAvailableResources'=> $grade8Audio
            ];
        }

        /* Grade 7 */
        $grade7=Grade::where('name','7')->first();

        
        if(Media::where('name','Document')->first()==Null){
            $documentId=0;
        }else{
            $documentId=Media::where('name','Document')->first()->id;
        }
        
        if(Media::where('name','Video')->first()==Null){
            $videoId=0;
        }else{
            $videoId=Media::where('name','Video')->first()->id;
        }
        
        if(Media::where('name','Audio')->first()==Null){
            $audioId=0;
        }else{
            $audioId=Media::where('name','Audio')->first()->id;
        }
        if($grade7==Null){
            $grade7Document=0;
            $grade7Video=0;
            $grade7Audio=0;
        }else{
            $grade7Document=count($grade7->resources->where('media_id',$documentId));
            $grade7Video=count($grade7->resources->where('media_id',$videoId));
            $grade7Audio=count($grade7->resources->where('media_id',$audioId));

            /* 
            Grade 7 Resource available data
            */
            $datas[5][0]=[
                'grade_id'=> $grade7->id,
                'media_id'=> $documentId,
                'totalAvailableResources'=> $grade7Document
            ];
            $datas[5][1]=[
                'grade_id'=> $grade7->id,
                'media_id'=> $videoId,
                'totalAvailableResources'=> $grade7Video
            ];
            $datas[5][2]=[
                'grade_id'=> $grade7->id,
                'media_id'=> $audioId,
                'totalAvailableResources'=> $grade7Audio
            ];
        }

        /* Grade 6 */
        $grade6=Grade::where('name','6')->first();

        
        if(Media::where('name','Document')->first()==Null){
            $documentId=0;
        }else{
            $documentId=Media::where('name','Document')->first()->id;
        }
        
        if(Media::where('name','Video')->first()==Null){
            $videoId=0;
        }else{
            $videoId=Media::where('name','Video')->first()->id;
        }
        
        if(Media::where('name','Audio')->first()==Null){
            $audioId=0;
        }else{
            $audioId=Media::where('name','Audio')->first()->id;
        }
        if($grade6==Null){
            $grade6Document=0;
            $grade6Video=0;
            $grade6Audio=0;
        }else{
            $grade6Document=count($grade6->resources->where('media_id',$documentId));
            $grade6Video=count($grade6->resources->where('media_id',$videoId));
            $grade6Audio=count($grade6->resources->where('media_id',$audioId));

            /* 
            Grade 6 Resource available data
            */
            $datas[6][0]=[
                'grade_id'=> $grade6->id,
                'media_id'=> $documentId,
                'totalAvailableResources'=> $grade6Document
            ];
            $datas[6][1]=[
                'grade_id'=> $grade6->id,
                'media_id'=> $videoId,
                'totalAvailableResources'=> $grade6Video
            ];
            $datas[6][2]=[
                'grade_id'=> $grade6->id,
                'media_id'=> $audioId,
                'totalAvailableResources'=> $grade6Audio
            ];
        }

        /* Grade 5 */
        $grade5=Grade::where('name','5')->first();

        
        if(Media::where('name','Document')->first()==Null){
            $documentId=0;
        }else{
            $documentId=Media::where('name','Document')->first()->id;
        }
        
        if(Media::where('name','Video')->first()==Null){
            $videoId=0;
        }else{
            $videoId=Media::where('name','Video')->first()->id;
        }
        
        if(Media::where('name','Audio')->first()==Null){
            $audioId=0;
        }else{
            $audioId=Media::where('name','Audio')->first()->id;
        }
        if($grade5==Null){
            $grade5Document=0;
            $grade5Video=0;
            $grade5Audio=0;
        }else{
            $grade5Document=count($grade5->resources->where('media_id',$documentId));
            $grade5Video=count($grade5->resources->where('media_id',$videoId));
            $grade5Audio=count($grade5->resources->where('media_id',$audioId));

            /* 
            Grade 5 Resource available data
            */
            $datas[7][0]=[
                'grade_id'=> $grade5->id,
                'media_id'=> $documentId,
                'totalAvailableResources'=> $grade5Document
            ];
            $datas[7][1]=[
                'grade_id'=> $grade5->id,
                'media_id'=> $videoId,
                'totalAvailableResources'=> $grade5Video
            ];
            $datas[7][2]=[
                'grade_id'=> $grade5->id,
                'media_id'=> $audioId,
                'totalAvailableResources'=> $grade5Audio
            ];
        }

        /* Grade 4 */
        $grade4=Grade::where('name','4')->first();

        
        if(Media::where('name','Document')->first()==Null){
            $documentId=0;
        }else{
            $documentId=Media::where('name','Document')->first()->id;
        }
        
        if(Media::where('name','Video')->first()==Null){
            $videoId=0;
        }else{
            $videoId=Media::where('name','Video')->first()->id;
        }
        
        if(Media::where('name','Audio')->first()==Null){
            $audioId=0;
        }else{
            $audioId=Media::where('name','Audio')->first()->id;
        }
        if($grade4==Null){
            $grade4Document=0;
            $grade4Video=0;
            $grade4Audio=0;
        }else{
            $grade4Document=count($grade4->resources->where('media_id',$documentId));
            $grade4Video=count($grade4->resources->where('media_id',$videoId));
            $grade4Audio=count($grade4->resources->where('media_id',$audioId));

              /* 
            Grade 4 Resource available data
            */
            $datas[8][0]=[
                'grade_id'=> $grade4->id,
                'media_id'=> $documentId,
                'totalAvailableResources'=> $grade4Document
            ];
            $datas[8][1]=[
                'grade_id'=> $grade4->id,
                'media_id'=> $videoId,
                'totalAvailableResources'=> $grade4Video
            ];
            $datas[8][2]=[
                'grade_id'=> $grade4->id,
                'media_id'=> $audioId,
                'totalAvailableResources'=> $grade4Audio
            ];
        }

        /* Grade 3 */
        $grade3=Grade::where('name','3')->first();

        
        if(Media::where('name','Document')->first()==Null){
            $documentId=0;
        }else{
            $documentId=Media::where('name','Document')->first()->id;
        }
        
        if(Media::where('name','Video')->first()==Null){
            $videoId=0;
        }else{
            $videoId=Media::where('name','Video')->first()->id;
        }
        
        if(Media::where('name','Audio')->first()==Null){
            $audioId=0;
        }else{
            $audioId=Media::where('name','Audio')->first()->id;
        }
        if($grade3==Null){
            $grade3Document=0;
            $grade3Video=0;
            $grade3Audio=0;
        }else{
            $grade3Document=count($grade3->resources->where('media_id',$documentId));
            $grade3Video=count($grade3->resources->where('media_id',$videoId));
            $grade3Audio=count($grade3->resources->where('media_id',$audioId));

              /* 
            Grade 3 Resource available data
            */
            $datas[9][0]=[
                'grade_id'=> $grade3->id,
                'media_id'=> $documentId,
                'totalAvailableResources'=> $grade3Document
            ];
            $datas[9][1]=[
                'grade_id'=> $grade3->id,
                'media_id'=> $videoId,
                'totalAvailableResources'=> $grade3Video
            ];
            $datas[9][2]=[
                'grade_id'=> $grade3->id,
                'media_id'=> $audioId,
                'totalAvailableResources'=> $grade3Audio
            ];
        }

        /* Grade 2 */
        $grade2=Grade::where('name','2')->first();

        
        if(Media::where('name','Document')->first()==Null){
            $documentId=0;
        }else{
            $documentId=Media::where('name','Document')->first()->id;
        }
        
        if(Media::where('name','Video')->first()==Null){
            $videoId=0;
        }else{
            $videoId=Media::where('name','Video')->first()->id;
        }
        
        if(Media::where('name','Audio')->first()==Null){
            $audioId=0;
        }else{
            $audioId=Media::where('name','Audio')->first()->id;
        }
        if($grade2==Null){
            $grade2Document=0;
            $grade2Video=0;
            $grade2Audio=0;
        }else{
            $grade2Document=count($grade2->resources->where('media_id',$documentId));
            $grade2Video=count($grade2->resources->where('media_id',$videoId));
            $grade2Audio=count($grade2->resources->where('media_id',$audioId));

                /* 
            Grade 2 Resource available data
            */
            $datas[10][0]=[
                'grade_id'=> $grade2->id,
                'media_id'=> $documentId,
                'totalAvailableResources'=> $grade2Document
            ];
            $datas[10][1]=[
                'grade_id'=> $grade2->id,
                'media_id'=> $videoId,
                'totalAvailableResources'=> $grade2Video
            ];
            $datas[10][2]=[
                'grade_id'=> $grade2->id,
                'media_id'=> $audioId,
                'totalAvailableResources'=> $grade2Audio
            ];
        }

        /* Grade 1 */
        $grade1=Grade::where('name','1')->first();

        
        if(Media::where('name','Document')->first()==Null){
            $documentId=0;
        }else{
            $documentId=Media::where('name','Document')->first()->id;
        }
        
        if(Media::where('name','Video')->first()==Null){
            $videoId=0;
        }else{
            $videoId=Media::where('name','Video')->first()->id;
        }
        
        if(Media::where('name','Audio')->first()==Null){
            $audioId=0;
        }else{
            $audioId=Media::where('name','Audio')->first()->id;
        }
        if($grade1==Null){
            $grade1Document=0;
            $grade1Video=0;
            $grade1Audio=0;
        }else{
            $grade1Document=count($grade1->resources->where('media_id',$documentId));
            $grade1Video=count($grade1->resources->where('media_id',$videoId));
            $grade1Audio=count($grade1->resources->where('media_id',$audioId));
                  /* 
            Grade 1 Resource available data
            */
            $datas[11][0]=[
                'grade_id'=> $grade1->id,
                'media_id'=> $documentId,
                'totalAvailableResources'=> $grade1Document
            ];
            $datas[11][1]=[
                'grade_id'=> $grade1->id,
                'media_id'=> $videoId,
                'totalAvailableResources'=> $grade1Video
            ];
            $datas[11][2]=[
                'grade_id'=> $grade1->id,
                'media_id'=> $audioId,
                'totalAvailableResources'=> $grade1Audio
            ];
        }

        foreach($datas as $data1){
            foreach($data1 as $data){
                $report=new Report;
                $report->grade_id=$data['grade_id'];
                $report->media_id=$data['media_id'];
                $report->totalAvailableResources=$data['totalAvailableResources'];
                $report->save();
            }
        }

        return $this->chart->barChart()
            ->setTitle('Available Resource Vs Grade.')
            ->setSubtitle('By Media type')
            ->addData('Documents', [$grade12Document, $grade11Document,  $grade10Document,  $grade9Document,  $grade8Document,  $grade7Document,  $grade6Document,  $grade5Document,  $grade4Document,  $grade3Document,  $grade2Document,  $grade1Document])
            ->addData('Video', [$grade12Video, $grade11Video,  $grade10Video,  $grade9Video,  $grade8Video,  $grade7Video,  $grade6Video,  $grade5Video,  $grade4Video,  $grade3Video,  $grade2Video,  $grade1Video])
            ->addData('Audio', [$grade12Audio, $grade11Audio,  $grade10Audio,  $grade9Audio,  $grade8Audio,  $grade7Audio,  $grade6Audio,  $grade5Audio,  $grade4Audio,  $grade3Audio,  $grade2Audio,  $grade1Audio])
            ->setXAxis(['Grade 12', 'Grade 11', 'Grade 10', 'Grade 9', 'Grade 8', 'Grade 7', 'Grade 6', 'Grade 5', 'Grade 4', 'Grade 3', 'Grade 2', 'Grade 1']);
    }
}
