<?php

namespace App\Http\Controllers;
use App\Models\student;
use App\Models\lecturer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function cview() //coordinator view
    {
        $data = DB::table('students')
        ->select('students.std_name', 'students.std_id', 'students.crs_id','students.title','lecturers.lect_id','lecturers.lect_name')
        ->join('lecturers','students.lect_id','=','lecturers.lect_id')
        ->get();

        return view('ManageDataEntry.Coordinator.viewdata', compact('data'));// called from views
    }

    public function lview()//lecturer view
    {
        $data = DB::table('students')
        ->select('students.std_name', 'students.std_id', 'students.crs_id','students.title','lecturers.lect_id','lecturers.lect_name')
        ->join('lecturers','students.lect_id','=','lecturers.lect_id')
        ->get();

        return view('ManageDataEntry.Lecturer.LViewdata', compact('data'));// called from views
    }

    public function sview()//student view
    {
        $data = DB::table('students')
        ->select('students.std_name', 'students.std_id', 'students.crs_id','students.title','lecturers.lect_id','lecturers.lect_name')
        ->join('lecturers','students.lect_id','=','lecturers.lect_id')
        ->get();

        return view('ManageDataEntry.Student.SViewdata', compact('data'));// called from views
    }

    public function adddata()
    {
        $data = DB::table('courses')
        ->select('crs_id', 'crs_name')
        ->get();

        $data1 = DB::table('lecturers')
        ->select('lect_id', 'lect_name')
        ->get();

        return view('ManageDataEntry.Coordinator.adddata',compact('data','data1'));// called from views
    }

    public function storedata()
    {
        $std = new  student();
        $std->std_id = request('std_id');
        $std->crs_id = request('crs_id');
        $std->lect_id = request('lect_id');
        $std->title  = request('title');
        $std->std_name  = request('std_name');
        $std->std_email = request('std_email');
        $std->std_hp = request('std_hp');
        $std->std_fac = request('std_fac');
        error_log($std);

        $std->save();


        return redirect('/cviewdata');
    }

    public function deletedata($std_id)
    {
        error_log('Stock Destroying...');
        error_log($std_id);
        $data = DB::table('students')->select('*')->where('std_id', '=', $std_id);
        //$data = comp::find($id);
        $data->delete();

        return redirect('/cviewdata');
    }

    public function showdata($std_id)
    {
        $data = DB::table('students')->select('*')->where('std_id', '=', $std_id)->get();

        return view('ManageDataEntry.Coordinator.updatedata', ['data' => $data]);
    }

    public function updatedata()
    {
        error_log("updating..");
        $std_id = request('std_id');
        $crs_id = request('crs_id');
        $lect_id = request('lect_id');
        $title  = request('title');
        $std_name  = request('std_name');
        $std_email = request('std_email');
        $std_hp = request('std_hp');
        $std_fac = request('std_fac');
      

        student:: where('std_id', $std_id)->update(['std_id' => $std_id, 'crs_id' => $crs_id, 'lect_id' => $lect_id, 'title' => $title,
        'std_name' => $std_name, 'std_email' => $std_email, 'std_hp' => $std_hp, 'std_fac' => $std_fac]);
        return redirect('/cviewdata');
    }


}
