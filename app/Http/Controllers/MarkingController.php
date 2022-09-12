<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\evaluation;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MarkingController extends Controller
{
    //FIRST EVALUATION
    public function addmarks1($std_id) //first evaluation 
    {
        $data = DB::table('students')
        ->select('students.std_name', 'students.std_id', 'courses.crs_id', 'courses.crs_name')
        ->join('courses','students.crs_id','=','courses.crs_id')
        ->where('students.std_id', '=', $std_id)
        ->get();

        $data1 = DB::table('rubrics')
        ->select('rubrics.co','rubrics.criteria','rubrics.mark5','rubrics.mark4','rubrics.mark3',
        'rubrics.mark2','rubrics.mark1','rubrics.mark0','rubrics.weight') 
        ->join('courses','rubrics.crs_id','=','courses.crs_id')    
        ->join('students','courses.crs_id','=','students.crs_id')
        ->where('students.std_id', '=', $std_id)
        ->where('rubrics.rubrictype', 'like', '%-1')
        ->get(); 

        $ev_id = DB::table('evaluations')
        ->count() + 1;

        if ($ev_id <= 9) {
            $ev_id = "E0" . $ev_id;
        } else {
            $ev_id = "E" . $ev_id;
        }
        
        $evaluations = evaluation::all();
                   
        return view('ManageMarks.Supervisor.Addmarks1',['ev_id' => $ev_id],compact('data','data1'));// called from views
    }
    public function store(Request $request) //first evaluation
    {

        $evaluations = new evaluation();
        $evaluations->ev_id = request('ev_id');
        $evaluations->std_id = request('std_id');
        $evaluations->marksev1 = request('marksev1');
        $evaluations->marksev2 = 0;
        $evaluations->marksev3 = 0;
        $evaluations->markstotal = 0;
        
        error_log($evaluations);

        $evaluations->save();
        return redirect('/markedlist1');
    }

    public function showupd1($ev_id)//first evaluation
    {
        $data = DB::table('students')
        ->select('students.std_name', 'students.std_id', 'courses.crs_id', 'courses.crs_name')
        ->join('courses','students.crs_id','=','courses.crs_id')
        ->join('evaluations','students.std_id','=','evaluations.std_id')
        ->where('evaluations.ev_id', '=', $ev_id)
        ->get();

        $data1 = DB::table('rubrics')
        ->select('rubrics.co','rubrics.criteria','rubrics.mark5','rubrics.mark4','rubrics.mark3',
        'rubrics.mark2','rubrics.mark1','rubrics.mark0','rubrics.weight') 
        ->join('courses','rubrics.crs_id','=','courses.crs_id')    
        ->join('students','courses.crs_id','=','students.crs_id')
        ->join('evaluations','students.std_id','=','evaluations.std_id')
        ->where('evaluations.ev_id', '=', $ev_id)
        ->where('rubrics.rubrictype', 'like', '%-1')
        ->get(); 

        $data2 = DB::table('evaluations')
        ->select('evaluations.ev_id', 'evaluations.std_id', 'evaluations.marksev1', 'evaluations.marksev2','evaluations.marksev3','evaluations.markstotal',)
        ->where('evaluations.ev_id', '=', $ev_id)
        ->get();

        return view('ManageMarks.Supervisor.UpdateMarks1',compact('data'),compact('data1','data2'));
    }
    
    public function updatemarks1() //first evaluation
    {
        error_log("udpating..");
        $ev_id = request('ev_id');
        $marksev1 = request('marksev1');

       evaluation::where('evaluations.ev_id', '=', $ev_id)
       ->update(['marksev1' => $marksev1]);

        return redirect('/markedlist1');// called from views
    }

    public function markedlist1() //first evaluation
    {
        $add = Auth::user()->u_type;
        $data = DB::table('students')
        ->select('students.std_name', 'students.std_id', 'courses.crs_id', 'courses.crs_name','evaluations.marksev1','evaluations.ev_id')
        ->join('courses','students.crs_id','=','courses.crs_id')
        ->join('evaluations','students.std_id','=','evaluations.std_id')
        ->join('users','students.lect_id','=','users.u_id')
        ->where('evaluations.marksev1', '!=', '')
        ->where('users.u_type', 'like', $add.'%')
        ->get();
        return view('ManageMarks.Supervisor.MarkedLists1',compact('data'));// called from views

    }

    public function unmarkedlist1() //first evaluation
    {  
        $add = Auth::user()->u_type;
        $data = DB::table('students')
        ->select('students.std_name', 'students.std_id', 'courses.crs_id', 'courses.crs_name')
        ->join('courses','students.crs_id','=','courses.crs_id')
        ->join('users','students.lect_id','=','users.u_id')
        ->where('users.u_type', 'like', $add.'%')
        ->get();

        return view('ManageMarks.Supervisor.UnmarkedLists1',compact('data'));// called from views
    }

    public function deletemark1($ev_id)//first evaluation
    {
        error_log('Stock Destroying...');
        error_log($ev_id);
        $data = DB::table('evaluations')->select('*')->where('ev_id', '=', $ev_id);
        //$data = comp::find($id);
        $data->delete();
        return redirect('/markedlist1');
    }
    
    public function main1() 
    {
        return view('ManageMarks.Supervisor.main');// called from views
    }



    //SECOND EVALUATION

    public function addmarks2($std_id) //second evaluation
    {
        $data = DB::table('students')
        ->select('students.std_name', 'students.std_id', 'courses.crs_id', 'courses.crs_name','evaluations.ev_id','evaluations.marksev1', 'evaluations.marksev2')
        ->join('courses','students.crs_id','=','courses.crs_id')
        ->join('evaluations','students.std_id','=','evaluations.std_id')
        ->where('students.std_id', '=', $std_id)
        ->get();

        $data1 = DB::table('rubrics')
        ->select('rubrics.co','rubrics.criteria','rubrics.mark5','rubrics.mark4','rubrics.mark3',
        'rubrics.mark2','rubrics.mark1','rubrics.mark0','rubrics.weight') 
        ->join('courses','rubrics.crs_id','=','courses.crs_id')    
        ->join('students','courses.crs_id','=','students.crs_id')
        ->where('students.std_id', '=', $std_id)
        ->where('rubrics.rubrictype', 'like', '%-2')
        ->get(); 

        $ev_id = DB::table('evaluations')
        ->count() + 1;

        if ($ev_id <= 9) {
            $ev_id = "E0" . $ev_id;
        } else {
            $ev_id = "E" . $ev_id;
        }
        
        $evaluations = evaluation::all();
                   
        return view('ManageMarks.Evaluator.Addmarks2',compact('data'),compact('data1'),['ev_id' => $ev_id]);// called from views
    }

    public function store2(Request $request) //second evaluation
    {
        error_log("udpating..");
        $ev_id = request('ev_id');
        $marksev2 = request('marksev2');

       evaluation::where('evaluations.ev_id', '=', $ev_id)
       ->update(['marksev2' => $marksev2]);

        return redirect('/markedlist2');// called from views
    }

    public function showupd2($ev_id)//second evaluation
    {
        $data = DB::table('students')
        ->select('students.std_name', 'students.std_id', 'courses.crs_id', 'courses.crs_name')
        ->join('courses','students.crs_id','=','courses.crs_id')
        ->join('evaluations','students.std_id','=','evaluations.std_id')
        ->where('evaluations.ev_id', '=', $ev_id)
        ->get();

        $data1 = DB::table('rubrics')
        ->select('rubrics.co','rubrics.criteria','rubrics.mark5','rubrics.mark4','rubrics.mark3',
        'rubrics.mark2','rubrics.mark1','rubrics.mark0','rubrics.weight') 
        ->join('courses','rubrics.crs_id','=','courses.crs_id')    
        ->join('students','courses.crs_id','=','students.crs_id')
        ->join('evaluations','students.std_id','=','evaluations.std_id')
        ->where('evaluations.ev_id', '=', $ev_id)
        ->where('rubrics.rubrictype', 'like', '%-2')
        ->get(); 

        $data2 = DB::table('evaluations')
        ->select('evaluations.ev_id', 'evaluations.std_id', 'evaluations.marksev1', 'evaluations.marksev2','evaluations.marksev3','evaluations.markstotal',)
        ->where('evaluations.ev_id', '=', $ev_id)
        ->get();

        return view('ManageMarks.Evaluator.UpdateMarks2',compact('data'),compact('data1','data2'));
    }
    
    public function updatemarks2() //second evaluation
    {
        error_log("udpating..");
        $ev_id = request('ev_id');
        $marksev2 = request('marksev2');

       evaluation::where('evaluations.ev_id', '=', $ev_id)
       ->update(['marksev2' => $marksev2]);

        return redirect('/markedlist2');// called from views
    }

    public function markedlist2() //second evaluation
    {
        $add = Auth::user()->u_type;
        $data = DB::table('students')
        ->select('students.std_name', 'students.std_id', 'courses.crs_id', 'courses.crs_name','evaluations.marksev2','evaluations.ev_id')
        ->join('courses','students.crs_id','=','courses.crs_id')
        ->join('evaluations','students.std_id','=','evaluations.std_id')
        ->join('users','students.lect_id','=','users.u_id')
        ->where('users.u_type', 'like', $add.'%')
        ->where('evaluations.marksev2', '!=', '')
        ->get();
        return view('ManageMarks.Evaluator.MarkedLists2',compact('data'));// called from views

    }

    public function unmarkedlist2() //second evaluation
    {  
        $add = Auth::user()->u_type;
        $data = DB::table('students')
        ->select('students.std_name', 'students.std_id', 'courses.crs_id', 'courses.crs_name')
        ->join('courses','students.crs_id','=','courses.crs_id')
        ->join('evaluations','students.std_id','=','evaluations.std_id')
        ->join('users','students.lect_id','=','users.u_id')
        ->where('users.u_type', 'like', $add.'%')
        ->where('evaluations.marksev2', '=', '')
        ->get();

        return view('ManageMarks.Evaluator.UnmarkedLists2',compact('data'));// called from views
    }


    public function deletemark2($ev_id)//second evaluation
    {
        error_log('Stock Destroying...');
        error_log($ev_id);
        $data = DB::table('evaluations')->where('ev_id', '=', $ev_id)->update(['marksev2' => '0']);
        //$data = comp::find($id);

        return redirect('/markedlist2');
    }

    public function main2() 
    {
        return view('ManageMarks.Evaluator.main2');// called from views
    }




    //THIRD EVALUATION

    public function addmarks3($std_id) //second evaluation
    {
        $data = DB::table('students')
        ->select('students.std_name', 'students.std_id', 'courses.crs_id', 'courses.crs_name','evaluations.ev_id','evaluations.marksev1', 'evaluations.marksev2','evaluations.marksev3')
        ->join('courses','students.crs_id','=','courses.crs_id')
        ->join('evaluations','students.std_id','=','evaluations.std_id')
        ->where('students.std_id', '=', $std_id)
        ->get();

        $data1 = DB::table('rubrics')
        ->select('rubrics.co','rubrics.criteria','rubrics.mark5','rubrics.mark4','rubrics.mark3',
        'rubrics.mark2','rubrics.mark1','rubrics.mark0','rubrics.weight') 
        ->join('courses','rubrics.crs_id','=','courses.crs_id')    
        ->join('students','courses.crs_id','=','students.crs_id')
        ->where('students.std_id', '=', $std_id)
        ->where('rubrics.rubrictype', 'like', '%-2')
        ->get(); 

        $ev_id = DB::table('evaluations')
        ->count() + 1;

        if ($ev_id <= 9) {
            $ev_id = "E0" . $ev_id;
        } else {
            $ev_id = "E" . $ev_id;
        }
        
        $evaluations = evaluation::all();
                   
        return view('ManageMarks.Supervisor.Addmarks3',compact('data'),compact('data1'),['ev_id' => $ev_id]);// called from views
    }

    public function store3(Request $request) //second evaluation
    {
        error_log("udpating..");
        $ev_id = request('ev_id');
        $marksev3 = request('marksev3');

       evaluation::where('evaluations.ev_id', '=', $ev_id)
       ->update(['marksev3' => $marksev3]);

        return redirect('/markedlist3');// called from views
    }

    public function showupd3($ev_id)//second evaluation
    {
        $data = DB::table('students')
        ->select('students.std_name', 'students.std_id', 'courses.crs_id', 'courses.crs_name')
        ->join('courses','students.crs_id','=','courses.crs_id')
        ->join('evaluations','students.std_id','=','evaluations.std_id')
        ->where('evaluations.ev_id', '=', $ev_id)
        ->get();

        $data1 = DB::table('rubrics')
        ->select('rubrics.co','rubrics.criteria','rubrics.mark5','rubrics.mark4','rubrics.mark3',
        'rubrics.mark2','rubrics.mark1','rubrics.mark0','rubrics.weight') 
        ->join('courses','rubrics.crs_id','=','courses.crs_id')    
        ->join('students','courses.crs_id','=','students.crs_id')
        ->join('evaluations','students.std_id','=','evaluations.std_id')
        ->where('evaluations.ev_id', '=', $ev_id)
        ->where('rubrics.rubrictype', 'like', '%-3')
        ->get(); 

        $data2 = DB::table('evaluations')
        ->select('evaluations.ev_id', 'evaluations.std_id', 'evaluations.marksev1', 'evaluations.marksev2','evaluations.marksev3','evaluations.markstotal',)
        ->where('evaluations.ev_id', '=', $ev_id)
        ->get();

        return view('ManageMarks.Supervisor.UpdateMarks3',compact('data'),compact('data1','data2'));
    }
    
    public function updatemarks3() //second evaluation
    {
        error_log("udpating..");
        $ev_id = request('ev_id');
        $marksev2 = request('marksev3');

       evaluation::where('evaluations.ev_id', '=', $ev_id)
       ->update(['marksev3' => $marksev2]);

        return redirect('/markedlist3');// called from views
    }

    public function markedlist3() //second evaluation
    {
        $add = Auth::user()->u_type;
        $data = DB::table('students')
        ->select('students.std_name', 'students.std_id', 'courses.crs_id', 'courses.crs_name','evaluations.marksev3','evaluations.ev_id')
        ->join('courses','students.crs_id','=','courses.crs_id')
        ->join('evaluations','students.std_id','=','evaluations.std_id')
        ->join('users','students.lect_id','=','users.u_id')
        ->where('users.u_type', 'like', $add.'%')
        ->where('evaluations.marksev3', '!=', '')
        ->get();
        return view('ManageMarks.Supervisor.MarkedLists3',compact('data'));// called from views

    }

    public function unmarkedlist3() //second evaluation
    {  
        $add = Auth::user()->u_type;
        $data = DB::table('students')
        ->select('students.std_name', 'students.std_id', 'courses.crs_id', 'courses.crs_name')
        ->join('courses','students.crs_id','=','courses.crs_id')
        ->join('evaluations','students.std_id','=','evaluations.std_id')
        ->join('users','students.lect_id','=','users.u_id')
        ->where('users.u_type', 'like', $add.'%')
        ->where('evaluations.marksev3', '=', '')
        ->get();

        return view('ManageMarks.Supervisor.UnmarkedLists3',compact('data'));// called from views
    }


    public function deletemark3($ev_id)//second evaluation
    {
        error_log('Stock Destroying...');
        error_log($ev_id);
        $data = DB::table('evaluations')->where('ev_id', '=', $ev_id)->update(['marksev3' => '0']);
        //$data = comp::find($id);

        return redirect('/markedlist3');
    }


    public function main3() 
    {
        return view('ManageMarks.Supervisor.main3');// called from views
    }





    public function mainmark() 
    {
        return view('ManageMarks.Evaluationmain');// called from views
    }

    

    public function svmain() 
    {
        return view('ManageMarks.Supervisor.SVEvaluationMain');// called from views
    }

    public function evmain() 
    {
        return view('ManageMarks.Evaluator.EvEvaluationMain');// called from views
    }


    /*public function sv() {
        return '<h1>About us<h1>';//called from web router
    }*/
}