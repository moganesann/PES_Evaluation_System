@extends('SVlayout')
@section('content')
<title>Student Progress Main Page</title>
<style>
        button {
            margin-top: 10px;
            width: 180px;
        }

    </style>
    <div class="container">
        <h2>Student Progress Main Page</h2>

    </div>
    
    <br>
    <br> 
    <div class="container" style="text-align:center;">
            <div class="container col-md-4">  
                <div class="card" style=" width: 17rem;">
                    <img style="height:202px " class="card-img-top"
                    src="https://www.freeiconspng.com/uploads/arrow-bar-chart-diagram-graph-growth-progress-trend-icon-22.png" 
                        alt="Transparent Report Icon">
                    <div class="card-body">
                                           <h4 class="card-title"><b>View Student Progress</b></h4>
                        <div class="col text-center">
                         <a href="/svreport"><button class="btn btn-info btn-lg float-center"> ENTER</button></a>
                        </div>
                        </div>
                </div>
                

           
            </div>
            <div class="container col-md-2"></div>
        </div>
    </div>
    
@endsection