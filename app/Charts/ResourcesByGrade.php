<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Resource;
use App\Models\Media;
use App\Models\Grade;
use App\Models\Report;

class ResourcesByGrade
{
    protected $chart,$grade12,$grade11,$grade10,$grade9,$grade8,$grade7,$grade6,$grade5,$grade4,$grade3,$grade2,$grade1,$documentId,$videoId,$audioId,
    $grade12Document, $grade11Document, $grade10Document, $grade9Document, $grade8Document, $grade7Document, $grade6Document, $grade5Document, $grade4Document,
    $grade3Document, $grade2Document, $grade1Document,
    $grade12Video, $grade11Video, $grade10Video, $grade9Video, $grade8Video, $grade7Video, $grade6Video, $grade5Video, $grade4Video,
    $grade3Video, $grade2Video, $grade1Video,
    $grade12Audio, $grade11Audio, $grade10Audio, $grade9Audio, $grade8Audio, $grade7Audio, $grade6Audio, $grade5Audio, $grade4Audio,
    $grade3Audio, $grade2Audio, $grade1Audio;
    protected $datas=[[]];

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        /* Grade 12 */
        $this->grade12=Grade::where('name','12')->first();
        
        if(Media::where('name','Document')->first()==Null){
            $this->documentId=0;
        }else{
            $this->documentId=Media::where('name','Document')->first()->id;
        }
        
        if(Media::where('name','Video')->first()==Null){
            $this->videoId=0;
        }else{
            $this->videoId=Media::where('name','Video')->first()->id;
        }
        
        if(Media::where('name','Audio')->first()==Null){
            $this->audioId=0;
        }else{
            $this->audioId=Media::where('name','Audio')->first()->id;
        }
        /* 
        Grade report insert by media type
        */
        
        
        

        if($this->grade12==Null){
            $this->grade12Document=0;
            $this->grade12Video=0;
            $this->grade12Audio=0;
        }else{
            $this->grade12Document=count($this->grade12->resources->where('media_id',$this->documentId));
            $this->grade12Video=count($this->grade12->resources->where('media_id',$this->videoId));
            $this->grade12Audio=count($this->grade12->resources->where('media_id',$this->audioId));    
        }
       
       
        

        /* Grade 11 */
        $this->grade11=Grade::where('name','11')->first();

        
        if(Media::where('name','Document')->first()==Null){
            $this->documentId=0;
        }else{
            $this->documentId=Media::where('name','Document')->first()->id;
        }
        
        if(Media::where('name','Video')->first()==Null){
            $this->videoId=0;
        }else{
            $this->videoId=Media::where('name','Video')->first()->id;
        }
        
        if(Media::where('name','Audio')->first()==Null){
            $this->audioId=0;
        }else{
            $this->audioId=Media::where('name','Audio')->first()->id;
        }
        if($this->grade11==Null){
            $this->grade11Document=0;
            $this->grade11Video=0;
            $this->grade11Audio=0;
        }else{
            $this->grade11Document=count($this->grade11->resources->where('media_id',$this->documentId));
            $this->grade11Video=count($this->grade11->resources->where('media_id',$this->videoId));
            $this->grade11Audio=count($this->grade11->resources->where('media_id',$this->audioId));
        }

        /* Grade 10 */
        $this->grade10=Grade::where('name','10')->first();

        
        if(Media::where('name','Document')->first()==Null){
            $this->documentId=0;
        }else{
            $this->documentId=Media::where('name','Document')->first()->id;
        }
        
        if(Media::where('name','Video')->first()==Null){
            $this->videoId=0;
        }else{
            $this->videoId=Media::where('name','Video')->first()->id;
        }
        
        if(Media::where('name','Audio')->first()==Null){
            $this->audioId=0;
        }else{
            $this->audioId=Media::where('name','Audio')->first()->id;
        }
        if($this->grade10==Null){
            $this->grade10Document=0;
            $this->grade10Video=0;
            $this->grade10Audio=0;
        }else{
            $this->grade10Document=count($this->grade10->resources->where('media_id',$this->documentId));
            $this->grade10Video=count($this->grade10->resources->where('media_id',$this->videoId));
            $this->grade10Audio=count($this->grade10->resources->where('media_id',$this->audioId));
        }

        /* Grade 9 */
        $this->grade9=Grade::where('name','9')->first();

        
        if(Media::where('name','Document')->first()==Null){
            $this->documentId=0;
        }else{
            $this->documentId=Media::where('name','Document')->first()->id;
        }
        
        if(Media::where('name','Video')->first()==Null){
            $this->videoId=0;
        }else{
            $this->videoId=Media::where('name','Video')->first()->id;
        }
        
        if(Media::where('name','Audio')->first()==Null){
            $this->audioId=0;
        }else{
            $this->audioId=Media::where('name','Audio')->first()->id;
        }
        if($this->grade9==Null){
            $this->grade9Document=0;
            $this->grade9Video=0;
            $this->grade9Audio=0;
        }else{
            $this->grade9Document=count($this->grade9->resources->where('media_id',$this->documentId));
            $this->grade9Video=count($this->grade9->resources->where('media_id',$this->videoId));
            $this->grade9Audio=count($this->grade9->resources->where('media_id',$this->audioId));
        }

        /* Grade 8 */
        $this->grade8=Grade::where('name','8')->first();

        
        if(Media::where('name','Document')->first()==Null){
            $this->documentId=0;
        }else{
            $this->documentId=Media::where('name','Document')->first()->id;
        }
        
        if(Media::where('name','Video')->first()==Null){
            $this->videoId=0;
        }else{
            $this->videoId=Media::where('name','Video')->first()->id;
        }
        
        if(Media::where('name','Audio')->first()==Null){
            $this->audioId=0;
        }else{
            $this->audioId=Media::where('name','Audio')->first()->id;
        }
        if($this->grade8==Null){
            $this->grade8Document=0;
            $this->grade8Video=0;
            $this->grade8Audio=0;
        }else{
            $this->grade8Document=count($this->grade8->resources->where('media_id',$this->documentId));
            $this->grade8Video=count($this->grade8->resources->where('media_id',$this->videoId));
            $this->grade8Audio=count($this->grade8->resources->where('media_id',$this->audioId));
        }

        /* Grade 7 */
        $this->grade7=Grade::where('name','7')->first();

        
        if(Media::where('name','Document')->first()==Null){
            $this->documentId=0;
        }else{
            $this->documentId=Media::where('name','Document')->first()->id;
        }
        
        if(Media::where('name','Video')->first()==Null){
            $this->videoId=0;
        }else{
            $this->videoId=Media::where('name','Video')->first()->id;
        }
        
        if(Media::where('name','Audio')->first()==Null){
            $this->audioId=0;
        }else{
            $this->audioId=Media::where('name','Audio')->first()->id;
        }
        if($this->grade7==Null){
            $this->grade7Document=0;
            $this->grade7Video=0;
            $this->grade7Audio=0;
        }else{
            $this->grade7Document=count($this->grade7->resources->where('media_id',$this->documentId));
            $this->grade7Video=count($this->grade7->resources->where('media_id',$this->videoId));
            $this->grade7Audio=count($this->grade7->resources->where('media_id',$this->audioId));
        }

        /* Grade 6 */
        $this->grade6=Grade::where('name','6')->first();

        
        if(Media::where('name','Document')->first()==Null){
            $this->documentId=0;
        }else{
            $this->documentId=Media::where('name','Document')->first()->id;
        }
        
        if(Media::where('name','Video')->first()==Null){
            $this->videoId=0;
        }else{
            $this->videoId=Media::where('name','Video')->first()->id;
        }
        
        if(Media::where('name','Audio')->first()==Null){
            $this->audioId=0;
        }else{
            $this->audioId=Media::where('name','Audio')->first()->id;
        }
        if($this->grade6==Null){
            $this->grade6Document=0;
            $this->grade6Video=0;
            $this->grade6Audio=0;
        }else{
            $this->grade6Document=count($this->grade6->resources->where('media_id',$this->documentId));
            $this->grade6Video=count($this->grade6->resources->where('media_id',$this->videoId));
            $this->grade6Audio=count($this->grade6->resources->where('media_id',$this->audioId));
        }

        /* Grade 5 */
        $this->grade5=Grade::where('name','5')->first();

        
        if(Media::where('name','Document')->first()==Null){
            $this->documentId=0;
        }else{
            $this->documentId=Media::where('name','Document')->first()->id;
        }
        
        if(Media::where('name','Video')->first()==Null){
            $this->videoId=0;
        }else{
            $this->videoId=Media::where('name','Video')->first()->id;
        }
        
        if(Media::where('name','Audio')->first()==Null){
            $this->audioId=0;
        }else{
            $this->audioId=Media::where('name','Audio')->first()->id;
        }
        if($this->grade5==Null){
            $this->grade5Document=0;
            $this->grade5Video=0;
            $this->grade5Audio=0;
        }else{
            $this->grade5Document=count($this->grade5->resources->where('media_id',$this->documentId));
            $this->grade5Video=count($this->grade5->resources->where('media_id',$this->videoId));
            $this->grade5Audio=count($this->grade5->resources->where('media_id',$this->audioId));
        }

        /* Grade 4 */
        $this->grade4=Grade::where('name','4')->first();

        
        if(Media::where('name','Document')->first()==Null){
            $this->documentId=0;
        }else{
            $this->documentId=Media::where('name','Document')->first()->id;
        }
        
        if(Media::where('name','Video')->first()==Null){
            $this->videoId=0;
        }else{
            $this->videoId=Media::where('name','Video')->first()->id;
        }
        
        if(Media::where('name','Audio')->first()==Null){
            $this->audioId=0;
        }else{
            $this->audioId=Media::where('name','Audio')->first()->id;
        }
        if($this->grade4==Null){
            $this->grade4Document=0;
            $this->grade4Video=0;
            $this->grade4Audio=0;
        }else{
            $this->grade4Document=count($this->grade4->resources->where('media_id',$this->documentId));
            $this->grade4Video=count($this->grade4->resources->where('media_id',$this->videoId));
            $this->grade4Audio=count($this->grade4->resources->where('media_id',$this->audioId));
        }

        /* Grade 3 */
        $this->grade3=Grade::where('name','3')->first();

        
        if(Media::where('name','Document')->first()==Null){
            $this->documentId=0;
        }else{
            $this->documentId=Media::where('name','Document')->first()->id;
        }
        
        if(Media::where('name','Video')->first()==Null){
            $this->videoId=0;
        }else{
            $this->videoId=Media::where('name','Video')->first()->id;
        }
        
        if(Media::where('name','Audio')->first()==Null){
            $this->audioId=0;
        }else{
            $this->audioId=Media::where('name','Audio')->first()->id;
        }
        if($this->grade3==Null){
            $this->grade3Document=0;
            $this->grade3Video=0;
            $this->grade3Audio=0;
        }else{
            $this->grade3Document=count($this->grade3->resources->where('media_id',$this->documentId));
            $this->grade3Video=count($this->grade3->resources->where('media_id',$this->videoId));
            $this->grade3Audio=count($this->grade3->resources->where('media_id',$this->audioId));
        }

        /* Grade 2 */
        $this->grade2=Grade::where('name','2')->first();

        
        if(Media::where('name','Document')->first()==Null){
            $this->documentId=0;
        }else{
            $this->documentId=Media::where('name','Document')->first()->id;
        }
        
        if(Media::where('name','Video')->first()==Null){
            $this->videoId=0;
        }else{
            $this->videoId=Media::where('name','Video')->first()->id;
        }
        
        if(Media::where('name','Audio')->first()==Null){
            $this->audioId=0;
        }else{
            $this->audioId=Media::where('name','Audio')->first()->id;
        }
        if($this->grade2==Null){
            $this->grade2Document=0;
            $this->grade2Video=0;
            $this->grade2Audio=0;
        }else{
            $this->grade2Document=count($this->grade2->resources->where('media_id',$this->documentId));
            $this->grade2Video=count($this->grade2->resources->where('media_id',$this->videoId));
            $this->grade2Audio=count($this->grade2->resources->where('media_id',$this->audioId));
        }

        /* Grade 1 */
        $this->grade1=Grade::where('name','1')->first();

        
        if(Media::where('name','Document')->first()==Null){
            $this->documentId=0;
        }else{
            $this->documentId=Media::where('name','Document')->first()->id;
        }
        
        if(Media::where('name','Video')->first()==Null){
            $this->videoId=0;
        }else{
            $this->videoId=Media::where('name','Video')->first()->id;
        }
        
        if(Media::where('name','Audio')->first()==Null){
            $this->audioId=0;
        }else{
            $this->audioId=Media::where('name','Audio')->first()->id;
        }
        if($this->grade1==Null){
            $this->grade1Document=0;
            $this->grade1Video=0;
            $this->grade1Audio=0;
        }else{
            $this->grade1Document=count($this->grade1->resources->where('media_id',$this->documentId));
            $this->grade1Video=count($this->grade1->resources->where('media_id',$this->videoId));
            $this->grade1Audio=count($this->grade1->resources->where('media_id',$this->audioId));
        }

        $resouceByGradeReport=cache()->remember('resouceByGradeReport', 60*60*24*7, function (){
            
            /* 
            Grade 12 Resource available data
            */
            $this->datas[0][0]=[
                'grade_id'=> $this->grade12->id,
                'media_id'=> $this->documentId,
                'totalAvailableResources'=> $this->grade12Document
            ];
            $this->datas[0][1]=[
                'grade_id'=> $this->grade12->id,
                'media_id'=> $this->videoId,
                'totalAvailableResources'=> $this->grade12Video
            ];
            $this->datas[0][2]=[
                'grade_id'=> $this->grade12->id,
                'media_id'=> $this->audioId,
                'totalAvailableResources'=> $this->grade12Audio
            ];
            
            /* 
            Grade 11 Resource available data
            */
            $this->datas[1][0]=[
                'grade_id'=> $this->grade11->id,
                'media_id'=> $this->documentId,
                'totalAvailableResources'=> $this->grade11Document
            ];
            $this->datas[1][1]=[
                'grade_id'=> $this->grade11->id,
                'media_id'=> $this->videoId,
                'totalAvailableResources'=> $this->grade11Video
            ];
            $this->datas[1][2]=[
                'grade_id'=> $this->grade11->id,
                'media_id'=> $this->audioId,
                'totalAvailableResources'=> $this->grade11Audio
            ];
            
            /* 
            Grade 10 Resource available data
            */
            $this->datas[2][0]=[
                'grade_id'=> $this->grade10->id,
                'media_id'=> $this->documentId,
                'totalAvailableResources'=> $this->grade10Document
            ];
            $this->datas[2][1]=[
                'grade_id'=> $this->grade10->id,
                'media_id'=> $this->videoId,
                'totalAvailableResources'=> $this->grade10Video
            ];
            $this->datas[2][2]=[
                'grade_id'=> $this->grade10->id,
                'media_id'=> $this->audioId,
                'totalAvailableResources'=> $this->grade10Audio
            ];
            
            /* 
            Grade 9 Resource available data
            */
            $this->datas[3][0]=[
                'grade_id'=> $this->grade9->id,
                'media_id'=> $this->documentId,
                'totalAvailableResources'=> $this->grade9Document
            ];
            $this->datas[3][1]=[
                'grade_id'=> $this->grade9->id,
                'media_id'=> $this->videoId,
                'totalAvailableResources'=> $this->grade9Video
            ];
            $this->datas[3][2]=[
                'grade_id'=> $this->grade9->id,
                'media_id'=> $this->audioId,
                'totalAvailableResources'=> $this->grade9Audio
            ];

            /* 
            Grade 8 Resource available data
            */
            $this->datas[4][0]=[
                'grade_id'=> $this->grade8->id,
                'media_id'=> $this->documentId,
                'totalAvailableResources'=> $this->grade8Document
            ];
            $this->datas[4][1]=[
                'grade_id'=> $this->grade8->id,
                'media_id'=> $this->videoId,
                'totalAvailableResources'=> $this->grade8Video
            ];
            $this->datas[4][2]=[
                'grade_id'=> $this->grade8->id,
                'media_id'=> $this->audioId,
                'totalAvailableResources'=> $this->grade8Audio
            ];

            /* 
            Grade 7 Resource available data
            */
            $this->datas[5][0]=[
                'grade_id'=> $this->grade7->id,
                'media_id'=> $this->documentId,
                'totalAvailableResources'=> $this->grade7Document
            ];
            $this->datas[5][1]=[
                'grade_id'=> $this->grade7->id,
                'media_id'=> $this->videoId,
                'totalAvailableResources'=> $this->grade7Video
            ];
            $this->datas[5][2]=[
                'grade_id'=> $this->grade7->id,
                'media_id'=> $this->audioId,
                'totalAvailableResources'=> $this->grade7Audio
            ];

            /* 
            Grade 6 Resource available data
            */
            $this->datas[6][0]=[
                'grade_id'=> $this->grade6->id,
                'media_id'=> $this->documentId,
                'totalAvailableResources'=> $this->grade6Document
            ];
            $this->datas[6][1]=[
                'grade_id'=> $this->grade6->id,
                'media_id'=> $this->videoId,
                'totalAvailableResources'=> $this->grade6Video
            ];
            $this->datas[6][2]=[
                'grade_id'=> $this->grade6->id,
                'media_id'=> $this->audioId,
                'totalAvailableResources'=> $this->grade6Audio
            ];

            /* 
            Grade 5 Resource available data
            */
            $this->datas[7][0]=[
                'grade_id'=> $this->grade5->id,
                'media_id'=> $this->documentId,
                'totalAvailableResources'=> $this->grade5Document
            ];
            $this->datas[7][1]=[
                'grade_id'=> $this->grade5->id,
                'media_id'=> $this->videoId,
                'totalAvailableResources'=> $this->grade5Video
            ];
            $this->datas[7][2]=[
                'grade_id'=> $this->grade5->id,
                'media_id'=> $this->audioId,
                'totalAvailableResources'=> $this->grade5Audio
            ];

            /* 
          Grade 4 Resource available data
          */
          $this->datas[8][0]=[
              'grade_id'=> $this->grade4->id,
              'media_id'=> $this->documentId,
              'totalAvailableResources'=> $this->grade4Document
          ];
          $this->datas[8][1]=[
              'grade_id'=> $this->grade4->id,
              'media_id'=> $this->videoId,
              'totalAvailableResources'=> $this->grade4Video
          ];
          $this->datas[8][2]=[
              'grade_id'=> $this->grade4->id,
              'media_id'=> $this->audioId,
              'totalAvailableResources'=> $this->grade4Audio
          ];

        /* 
        Grade 3 Resource available data
        */
        $this->datas[9][0]=[
            'grade_id'=> $this->grade3->id,
            'media_id'=> $this->documentId,
            'totalAvailableResources'=> $this->grade3Document
        ];
        $this->datas[9][1]=[
            'grade_id'=> $this->grade3->id,
            'media_id'=> $this->videoId,
            'totalAvailableResources'=> $this->grade3Video
        ];
        $this->datas[9][2]=[
            'grade_id'=> $this->grade3->id,
            'media_id'=> $this->audioId,
            'totalAvailableResources'=> $this->grade3Audio
        ];

        /* 
        Grade 2 Resource available data
        */
        $this->datas[10][0]=[
            'grade_id'=> $this->grade2->id,
            'media_id'=> $this->documentId,
            'totalAvailableResources'=> $this->grade2Document
        ];
        $this->datas[10][1]=[
            'grade_id'=> $this->grade2->id,
            'media_id'=> $this->videoId,
            'totalAvailableResources'=> $this->grade2Video
        ];
        $this->datas[10][2]=[
            'grade_id'=> $this->grade2->id,
            'media_id'=> $this->audioId,
            'totalAvailableResources'=> $this->grade2Audio
        ];

        /* 
        Grade 1 Resource available data
        */
        $this->datas[11][0]=[
            'grade_id'=> $this->grade1->id,
            'media_id'=> $this->documentId,
            'totalAvailableResources'=> $this->grade1Document
        ];
        $this->datas[11][1]=[
            'grade_id'=> $this->grade1->id,
            'media_id'=> $this->videoId,
            'totalAvailableResources'=> $this->grade1Video
        ];
        $this->datas[11][2]=[
            'grade_id'=> $this->grade1->id,
            'media_id'=> $this->audioId,
            'totalAvailableResources'=> $this->grade1Audio
        ];


            foreach($this->datas as $data1){
                foreach($data1 as $data){
                    $report=new Report;
                    $report->grade_id=$data['grade_id'];
                    $report->media_id=$data['media_id'];
                    $report->totalAvailableResources=$data['totalAvailableResources'];
                    $report->save();
                }
            }
            return 1;
            
        });
      
        return $this->chart->barChart()
            ->setTitle('Available Resource Vs Grade.')
            ->setSubtitle('By Media type')
            ->addData('Documents', [$this->grade12Document, $this->grade11Document,  $this->grade10Document,  $this->grade9Document,  $this->grade8Document,  $this->grade7Document,  $this->grade6Document,  $this->grade5Document,  $this->grade4Document,  $this->grade3Document,  $this->grade2Document,  $this->grade1Document])
            ->addData('Video', [$this->grade12Video, $this->grade11Video,  $this->grade10Video,  $this->grade9Video,  $this->grade8Video,  $this->grade7Video,  $this->grade6Video,  $this->grade5Video,  $this->grade4Video,  $this->grade3Video,  $this->grade2Video,  $this->grade1Video])
            ->addData('Audio', [$this->grade12Audio, $this->grade11Audio,  $this->grade10Audio,  $this->grade9Audio,  $this->grade8Audio,  $this->grade7Audio,  $this->grade6Audio,  $this->grade5Audio,  $this->grade4Audio,  $this->grade3Audio,  $this->grade2Audio,  $this->grade1Audio])
            ->setXAxis(['Grade 12', 'Grade 11', 'Grade 10', 'Grade 9', 'Grade 8', 'Grade 7', 'Grade 6', 'Grade 5', 'Grade 4', 'Grade 3', 'Grade 2', 'Grade 1']);
    }
}
