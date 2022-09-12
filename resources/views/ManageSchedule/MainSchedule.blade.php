@extends('Clayout')
@section('content')

<!-- main page for coordninator view -->
<title>Schedule Main Page</title>

<style>
        button {
            margin-top: 10px;
            width: 180px;
        }

    </style>
    <div class="container">
        <h2>Schedule Main Page</h2>

    </div>

            </div>
            <div class="container" style="text-align:center;">
            <div class="container col-md-4">
                <div class="card" style=" width: 18rem;">
                    <!-- <img style="height:250px " class="card-img-top"
                        src="https://www.freeiconspng.com/uploads/report-icon-28.png" 
                        alt="Transparent Report Icon"> -->
                    <div class="card-body">
                        <h5 class="card-title"><b>Schedule</b></h5>
                         <a href="/SetScheduleForm"><button class="btn btn-info">ADD SCHEDULE</button></a>
                         <a href="/ViewScheduleForm"><button class="btn btn-info">VIEW SCHEDULE</button></a>
                        </div>
                </div>
                

           
            </div>
            <div class="container col-md-2"></div>
        </div>
    </div>
    
@endsection