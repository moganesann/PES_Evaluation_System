@extends('Clayout')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br>
            <p style = "font-size:30px"><b>Result of Top 20 Student</b></h2>
            <br><br>
        </div>
  <style>
        table {
            width: 300px;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
        }
    </style>

        <div class="row">
            <div class="col-md-12">

                <table id="marked"class="p-auto m-auto display table table-striped table-bordered text-center"
                        style="border-collapse:collapse;">
                    <thead>
                    
                        <tr>
                            <th>No.</th>
                            <th>Student Name</th>
                            <th>Matric ID</th>
                            <th>Project Title</th>
                            <th>Supervisor Name</th>
                            <th>Marks</th>
                            
                        </tr>
                     </thead>        

                     <tbody>

                                    @foreach ($calculate as $calc)
                                        <tr>
                                            <td>{{ $calc->no }}</td>
                                            <td>{{ $calc->std_name }}</td>
                                            <td>{{ $calc->std_id }}</td>
                                            <td>{{ $calc->proj_title }}</td>
                                            <td>{{ $calc->sv_name }}</td>
                                            <td>{{ $calc->marks }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                              
            </div>
        </div>
        <div class="container col-md-2"></div>
    </div>
</div>
                            
                        </tr>         
            </div>
        </div>
        <div class="container col-md-2"></div>
    </div>
</div>
                    </tfoot> 
                              
            </div>
        </div>
        <div class="container col-md-2"></div>
    </div>
</div>
                </table>
            </div>
        </div>
        <div class="container col-md-2"></div>
    </div>
</div>
                <br>
                <br>
                <br>
                <br>

<a href="/download-pdf"><button class="btn btn-success">BACK</button></a> 
                <a href="/maincord"><button class="btn btn-info">CANCEL</button></a> 
                              
            </div>
        </div>
        <div class="container col-md-2"></div>
    </div>
</div>

@endsection