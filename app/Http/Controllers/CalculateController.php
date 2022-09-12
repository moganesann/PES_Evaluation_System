<?php

namespace App\Http\Controllers;
use App\Models\evaluation;
use App\Models\pogress;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CalculateController extends Controller
{
    public function resultview()
    {
        return view('CalculateTop20.ViewResultTop20');// called from views
    }


    public function calcTop20()
    {
        // write your query here
        // pass the value
        // $top20Students = DB::table("evaluation");  
        $top20Students = DB::table("evaluations")
            ->join('students', 'students.std_id', 'evaluations.std_id')
            ->groupBy("evaluations.std_id")
            ->orderBy("evaluations.markstotal", "desc")
            ->take(20)
            ->get();

        // dd($top20Students);
        return view('CalculateTop20/Top20.Top20', compact('top20Students'));    
    }       
}
