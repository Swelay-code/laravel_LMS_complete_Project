<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Webcourse;
use App\Models\BasicCourse;
use App\Models\GraphicDesign;
use App\Models\FreeCourse;
use App\Models\Libbook;

class ShowVideoController extends Controller
{
    public function category(){
        $vcount=Course::count();
        $wcount=Webcourse::count();
        $bcount=BasicCourse::count();
        $gcount=GraphicDesign::count();
        $fcount=FreeCourse::count();
        return view('/index', compact('vcount','wcount','bcount','gcount','fcount',));
    }

    public function showvideo(){
        $data=Course::all();
        return view('/videoEditing', compact('data'));
    }
    public function webvideo(){
        $data=Webcourse::all();
        return view('/webdevelopment', compact('data'));
    }
    public function basicvideo(){
        $data=BasicCourse::all();
        return view('/basicComputing', compact('data'));
    }
    public function graphicvideo(){
        $data=GraphicDesign::all();
        return view('/graphicDesign', compact('data'));
    }
    public function freevideo(){
        $data=FreeCourse::all();
        return view('/freecourse', compact('data'));
    }
    public function showlib(){
        $data=Libbook::all();
        return view('/library', compact('data'));
    }
    
}
