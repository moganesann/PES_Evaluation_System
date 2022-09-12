@extends('Stdlayout')
@section('content')
<title>Progress Details</title>

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


</style>

<div class="container">
    <div class="row">
        <div class="col-md-11">
            <br>
            <p style = "font-size:25px"><b>Progress Details</b></h2>
            <br><br>
            <br><br>
        </div>

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
                            
                        </tr>
                    </thead>
                    
                    <tfoot>
                    @foreach ($progress2 as $tro)   
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
                            
                        </tr>
                    </tfoot>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="container col-md-2"></div>
    </div>
</div>


@endsection