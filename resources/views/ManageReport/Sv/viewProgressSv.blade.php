@extends('SVlayout')
@section('content')
<title>Student Progress Details</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
</script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
</script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js">
</script>



    </script>


</style>

<div class="container">
    <div class="row">
        <div class="col-md-11">
            <br>
            <p style = "font-size:25px"><b>Student Progress Details</b></h2>
            <br><br>


        <div class="row">
            <div class="col-md-12">

                <table id="marked"class="p-auto m-auto display table table-striped table-bordered text-center"
                        style="border-collapse:collapse;">
                    <thead>
                    
                        <tr>
                            <th>Matric ID</th>
                            <th>Student Name</th>
                            <th>Project Title</th>
                            <th>Progress</th>
                            <th>Evaluation Marks 1</th>
                            <th>Evaluation Marks 2</th>
                            <th>Evaluation Marks 3</th>
                            <th>Total Marks</th>
                            <th>Comments</th>
                            <th>Action</th>
                                                        
                        </tr>
                    </thead>
                    
                    <tfoot>
                   
                   @foreach ($progress as $tro)   
                            <tr>
                            <td>{{ $tro->std_id }}</td>
                            <td>{{ $tro->std_name }}</td>
                            <td>{{ $tro->title }}</td>
                            <td>{{ $tro->progress_perc }}</td>
                            <td>{{ $tro->marksev1 }}</td>
                            <td>{{ $tro->marksev2 }}</td>
                            <td>{{ $tro->marksev3 }}</td>
                            <td>{{ $tro->markstotal }}</td>
                            <td>{{ $tro->comments }}</td>
                            <td>
                                        <a href="/up/{{ $tro->std_id }}" class="btn"><button type="button"
                                                class="btn btn-primary"><i class="fas fa-cog fa-sm"></i>
                                            </button>
                                        </a>
                                    </td>
                           </tr>
                    </tfoot>
                    @endforeach
                    
                </table>
            </div>
        </div>
        <br><br>
        <div class="col text-center">
                         <a href="/svreport"><button class="btn btn-info btn-lg float-center"> BACK</button></a>
                        </div>

        <div class="container col-md-2"></div>
    </div>
</div>


@endsection