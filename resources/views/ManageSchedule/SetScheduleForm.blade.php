@extends('Clayout')
@section('content')

<!-- coordinator to addd new schedule details -->
<title>Add Schedule</title>

    <script>
        $(document).ready(function() {
            $('.searchbar2').select2();
            placeholder: " "
        });

    </script>
    <style>
        .align-left {
        text-align: left;
        border: 0;
      }
    </style>
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
        <div class="align-left">
        <a href="/skdhome"><button class="btn btn-success" ><</button></a> 
    </div>
        @if(Session::has('schedule_add'))
        <span>{{Session::get('schedule_add')}}</span 
        @endif

        <form action={{route('save.schedule')}} method="post">
            @csrf
            <div class="row py-4">
                <div class="col-md-2"> </div>
                <div class="col-md-8 border rounded">
                    <table class="table table-borderless table">
                        <tbody>
                            <thead >
                            <tr>
								<th>Schedule ID</th>
								<td><input type="text" id="schedule_id" name="schedule_id" placeholder="Schedule ID"></td>
							</tr>
							
								<th>Student ID</th>
								<td><input type="text" id="std_id" name="std_id" placeholder="Student ID"></td>
							</tr>
							
							<tr>
								<th>Lecturer ID</th>
								<td><input type="text" id="lect_id" name="lect_id" placeholder="Lecturer ID"></td>
							</tr>
							
							<tr>
								<th>Schedule Date</th>
								<td><input type="date" id="Schedule_date" name="Schedule_date" placeholder="Schedule Date"></td>
							</tr>

                            <tr>
								<th>Schedule Time</th>
								<td><input type="time" id="Schedule_time" name="Schedule_time" placeholder="Schedule Time"></td>
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
                </div>

            </div>
        </form>
        
    </div>


@endsection