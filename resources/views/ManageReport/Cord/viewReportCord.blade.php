@extends('Clayout')
@section('content')
<title>Student Report</title>

</style>

<div class="container">
    <div class="row">
        <div class="col-md-11">
            <br>
            <p style = "font-size:25px"><b>Student Report</b></h2>
            <br><br>
            <br><br>
        </div>

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
                            <th>Matric ID</th>
                            <th>Student Name</th>
                            <th>Project Title</th>
                            <th>Progress</th>
                            <th>Total Marks</th>
                            <th>Comments</th>
                            
                        </tr>
                    </thead>
                    
                    <tfoot>
                    @foreach ($progress as $pro)
                        <tr> 
                            <td>{{ $pro->std_id }}</td>
                            <td>{{ $pro->std_name }}</td>
                            <td>{{ $pro->title }}</td>
                            <td>{{ $pro->progress_perc }}</td>
                            <td>{{ $pro->markstotal }}</td>
                            <td>{{ $pro->comments }}</td>
                            
                        </tr>
                    </tfoot>
                    @endforeach
                </table>
                <br>
                <br>
                <br>
                <a href="/download-pdf"><button class="btn btn-success">GENERATE REPORT</button></a> 
                <a href="/maincord"><button class="btn btn-info">BACK</button></a> 
                              
            </div>
        </div>
        <div class="container col-md-2"></div>
    </div>
</div>


@endsection