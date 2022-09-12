<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use App\Models\progress;
use App\Models\evaluation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use PDF;


class ReportController extends Controller
{
    public function studentview() // student progress view page
    {
        $data23 = DB::table('progress')
        ->join('students', 'progress.std_id', '=', 'students.std_id')
        ->join('evaluations', 'evaluations.std_id', '=', 'students.std_id')
        ->select('students.*', 'progress.*', 'evaluations.*' )
        ->get();
        return view('ManageReport.Std.mainStProgress',['students2' => $data23]);// called from vie
        
    }

    public function searchstd(Request $request){ // student name search query (student)

        $query3 = $request->input('query3');
 
        $progress2 = DB::table('progress')
             ->join('students', 'progress.std_id', '=', 'students.std_id')
             ->join('evaluations', 'evaluations.std_id', '=', 'students.std_id')
             ->where('students.std_name', 'like' , "%$query3%")
             ->get();
        
         return view('ManageReport.Std.viewStProgress', compact('progress2'));
     }

    public function svview() // supervisor main page
    {
        return view('ManageReport.Sv.viewProgressSv');// called from views
    }

    public function cordview2()  // coordinator main page
    {
        return view('ManageReport.Cord.viewMainCord');// called from views
    }

    public function svview2() // supervisor search for student id page
    {
        return view('ManageReport.Sv.viewMainSv');// called from views
    }

    public function svviewreport() // supervisor view student progress
    {
        $data = DB::table('progress')
        ->join('students', 'progress.std_id', '=', 'students.std_id')
        ->join('evaluations', 'evaluations.std_id', '=', 'students.std_id')
        ->select('students.*', 'progress.*', 'evaluations.*' )
        ->get();
        return view('ManageReport.Sv.viewReportSv',['students' => $data]);// called from views
    }

    public function cordviewreport() // coordinator view overall student report
    {
        $data = DB::table('progress')
        ->join('students', 'progress.std_id', '=', 'students.std_id')
        ->join('evaluations', 'evaluations.std_id', '=', 'students.std_id')
        ->select('students.*', 'progress.*', 'evaluations.*' )
        ->get();

        return view('ManageReport.Cord.viewReportCord',['progress' => $data]);// called from views
       
    }

    public function search(Request $request){ // student id search query(supervisor)

        $query = $request->input('query');
 
        $progress = DB::table('progress')
             ->join('students', 'progress.std_id', '=', 'students.std_id')
             ->join('evaluations', 'evaluations.std_id', '=', 'students.std_id')
             ->where('students.std_id', 'like' , "%$query%")
             ->get();
        
         return view('ManageReport.Sv.viewProgressSv', compact('progress'));
     }

     public function comshow($std_id) // show student progress in update page(supervisor)
    {
        $data = DB::table('progress')->select('*')->where('std_id', '=', $std_id)->get();

        return view('ManageReport.Sv.updatecom', ['progress' => $data]);
    }

    public function updatecom() // update student progress in update page(supervisor)
    {
        error_log("updating..");
        $std_id = request('std_id');
        $progress_perc = request('progress_perc');
        $comments = request('comments');
        

        progress:: where('std_id', $std_id)->update(['std_id' => $std_id,'progress_perc' => $progress_perc,'comments' => $comments]);
        return redirect('/svreport');
    }

    public function downloadPDF() // download report in pdf (coordinator)
    {
        $progress = DB::table('progress')
        ->join('students', 'progress.std_id', '=', 'students.std_id')
        ->join('evaluations', 'evaluations.std_id', '=', 'students.std_id')
        ->select('students.*', 'progress.*', 'evaluations.*' )
        ->get();

        $pdf = PDF::loadView('ManageReport.Cord.viewReportCord',compact('progress'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('report.pdf');
       
    }


}