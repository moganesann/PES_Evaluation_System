@extends('Clayout')
@section('content')
<title>View Schedule</title>







</style>

<div class="container">
    <div class="row">
        <div class="col-md-11">
            <br>
            <p style = "font-size:25px"><b>Schedule</b></h2>
            <br><br>
            <br><br>
        </div>
            @if(Session::has('schedule_delete'))
            <span>{{Session::get('schedule_delete')}}</span 
            @endif
        <div class="row">
            <div class="col-md-12">

            <style>

                   #emp{

                      font-family: Arial, Helvetica, sans-serif;
                      border-collapse: collapse; 
                      width: 100%;
                      }
                      

                  #emp td, #emp th{

                 border: 1px solid #ddd;
                 padding: 8px; 

                  }

                  #emp th{

                  padding-top: 12px;

                  padding-bottom: 12px;

                  text-align: left;

                  background-color: #4CAF50;

                  color: #fff;
                   } 
 
               </style>
                    <table id='emp'>
                    <thead>
                    
                        <tr>
							<th>Schedule ID</th>
							<th>Student ID</th>
							<th>Lecturer ID</th>
							<th>Schedule Date</th>
							<th>Schedule Time</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                    <tfoot>
                    @foreach ($data_schedule as $schedule)
                        <tr>
							<td>{{$schedule->schedule_id}}</td>
							<td>{{$schedule->std_id}}</td>
							<td>{{$schedule->lect_id}}</td>
							<td>{{$schedule->Schedule_date}}</td>
							<td>{{$schedule->Schedule_time}}</td>
                            <td>
                                <a href="/DeleteScheduleForm/{{$schedule->schedule_id}}" class="btn btn-success">DELETE</a>
                                <a href="/UpdateScheduleForm/{{$schedule->schedule_id}}" class="btn btn-info">UPDATE</a>
                            </td>
                        </tr>
                    </tfoot>
                    @endforeach
                </table>
                <br>
                <br>
                <br>
                <a href="/SetScheduleForm"><button class="btn btn-success">ADD SCHEDULE</button></a> 
                <a href="/skdhome"><button class="btn btn-info">BACK</button></a> 

                              
            </div>
        </div>
        <div class="container col-md-2"></div>
    </div>
</div>


@endsection

