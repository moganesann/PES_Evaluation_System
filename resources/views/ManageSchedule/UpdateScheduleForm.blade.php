@extends('Clayout')
@section('content')
    <script>
        $(document).ready(function() {
            $('.searchbar2').select2();
            placeholder: " "
        });

    </script>
    <div class="container text-right mb-5 m-auto mt-5 ">
        <div class="row ">
            <div class="col-md-2 ">

            </div>
            <div class="col-md-4 text-center pt-2">
                
            

            </div>
            <div class="col-md-1  pt-2">

            </div>
            <div class="col-md-3  pt-2">

            </div>
        </div>

        @if(Session::has('schedule_edit'))
        <span>{{Session::get('schedule_edit')}}</span 
        @endif
        
        <form action={{route('edit.schedule')}} method="post">
            @csrf
            <div class="row py-4">
                <div class="col-md-2"> </div>
                <div class="col-md-8 border rounded">
                    <table class="table table-borderless table">
                        <tbody>
                            <thead >
                            <tr>
								<th>Schedule ID</th>
								<td><input type="text" id="schedule_id" name="schedule_id" placeholder="Schedule ID" value="{{$data_schedule->schedule_id}}"></td>
							</tr>
							
								<th>Student ID</th>
								<td><input type="text" id="std_id" name="std_id" placeholder="Student ID" value="{{$data_schedule->std_id}}"></td>
							</tr>
							
							<tr>
								<th>Lecturer ID</th>
								<td><input type="text" id="lect_id" name="lect_id" placeholder="Lecturer ID" value="{{$data_schedule->lect_id}}"></td>
							</tr>
							
							<tr>
								<th>Schedule Date</th>
								<td><input type="date" id="Schedule_date" name="Schedule_date" placeholder="Schedule Date" value="{{$data_schedule->Schedule_date}}"></td>
							</tr>

                            <tr>
								<th>Schedule Time</th>
								<td><input type="time" id="Schedule_time" name="Schedule_time" placeholder="Schedule Time" value="{{$data_schedule->Schedule_time}}"></td>
							</tr>
                            </thead>
                        </tbody>
                    </table>



                </div>
                <div class="col-md-2">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 "></div>
                <div class="col-md-7 ">

                    <input type="submit" class="btn btn-success" value="Submit" name="Confirm">
                    <input type="reset" class="btn btn-info" value="Reset"> 
                    
                    <!-- <button type="submit" style="width:100%" class="m-5 mt-1 btn-block btn-primary">Save</button> -->
                </div>

                <div class="col-md-2 "></div>
            </div>
        </form>
        <a href="/ViewScheduleForm"><button class="btn btn-info">Back</button></a>
    </div>


@endsection