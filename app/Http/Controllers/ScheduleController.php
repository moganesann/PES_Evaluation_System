<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    public function schedule() {//main page
        return view('ManageSchedule.MainSchedule');
    }

    public function viewschedule(){//view schedule(coordinator)
        $data_schedule =\App\Models\schedule::all();
        return view ('ManageSchedule.ViewScheduleForm', ['data_schedule'=>$data_schedule]);
    }

    public function setschedule(){//add schedule(coordinator)
        return view ('ManageSchedule.SetScheduleForm');
    }

    public function Saveschedule(Request $request){//store schedule(coordinator)

        $data_schedule = DB::table('schedules')->insert([

            'schedule_id' => $request->schedule_id,
            'std_id' => $request-> std_id,
            'lect_id' => $request-> lect_id,
            'Schedule_date' => $request-> Schedule_date,
            'Schedule_time' => $request-> Schedule_time

        ]);
        return back()->with('schedule_add', 'Schedule added successfully!!');
    }

    public function updateschedule($schedule_id){//update schedule(coordinator)
        $data_schedule = DB::table('schedules')->where('schedule_id', $schedule_id)->first();
        return view ('ManageSchedule.UpdateScheduleForm', compact('data_schedule'));

    }

    public function editschedule(Request $request){//edit schedule(coordinator)
        $data_schedule = DB::table('schedules')->where('schedule_id', $request->schedule_id)->update([
            'schedule_id' => $request->schedule_id,
            'std_id' => $request-> std_id,
            'lect_id' => $request-> lect_id,
            'Schedule_date' => $request-> Schedule_date,
            'Schedule_time' => $request-> Schedule_time
        ]);
        return back() -> with ('schedule_edit', 'Information successfully updated');

    }

    public function deleteschedule($schedule_id){//delete schedule(coordinator)
        $data_schedule = DB::table('schedules')->where('schedule_id', $schedule_id)->delete();
        return back() -> with ('schedule_delete', 'Information successfully deleted');

     }

     public function stdlectskdview(Request $request){

        if(isset($_GET['search'])){

            $search = $_GET['search'];
            $data_schedule = DB::table('schedules')->where('std_id', 'LIKE', "%$search%")->orwhere ('lect_id', 'LIKE', "%$search%")->get();
            return view ('ManageSchedule.StdLectView', ['data_schedule'=>$data_schedule]);
        }
        else{
            return view('ManageSchedule.StdLectView');
        }
     }


}
