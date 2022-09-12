@extends('Stdlayout')
@section('content')

<!-- Evaluator and student view to check weather there are included on top 20 list and view schedule  -->
<title>View Page</title>

<style>
        button {
            margin-top: 10px;
            width: 180px;
        }

    </style>
    <div class="container">
        <h2>View Schedule</h2>

    </div>
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

            </div>
            <div class="container" style="text-align:center;">
            <div class="container col-md-4">
            <form action="" class="col-15" method="GET">
                    <div class="form-group">
                        <input type="search" name="search" id="search" class="form-control" placeholder="Enter Student ID or Lecturer ID">
                    </div>
                    <button class="btn btn-success">Search</button>
                </form>  
                @if(isset($data_schedule))      
                <br>  
                <br>  
                <br>  
                <br>  
                <br>  
                <table id='emp'>
                    <thead>
                    
                        <tr>
							<th>Student ID</th>
							<th>Lecturer ID</th>
							<th>Schedule Date</th>
							<th>Schedule Time</th>
                        </tr>
                    </thead>
                    
                    <tfoot>
                        @if(count($data_schedule)>0)
                            @foreach ($data_schedule as $schedule)
                                <tr>
                                    <td>{{$schedule->std_id}}</td>
                                    <td>{{$schedule->lect_id}}</td>
                                    <td>{{$schedule->Schedule_date}}</td>
                                    <td>{{$schedule->Schedule_time}}</td>
                                </tr>
                            </tfoot>
                            @endforeach
                @else
                No result found!
                @endif
                @endif
            </div>
            <div class="container col-md-2"></div>
        </div>
    </div>
@endsection