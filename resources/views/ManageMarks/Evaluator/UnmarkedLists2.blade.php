@extends('Elayout')

@section('content')
<!-- Unmarked Lists Evalutor view -->
<title>Unmarked Lists Second Evaluation</title>

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


<script type="text/javascript" class="init">
        $(document).ready(function() {
            $('#unmarked2').DataTable({
                "pageLength": 5,
                "lengthMenu": [
                    [5, 10, 25, 50, -1],
                    [5, 10, 25, 50, "All"]
                ]
            });
        });

    </script>

<style>


</style>

<div class="container">
    <div class="row">
        <div class="col-md-11">
            <br>
            <p style = "font-size:25px"><b>Second Evaluation Unmarked Student Lists</b></h2>
            <br><br>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table id="unmarked2"class="p-auto m-auto display table table-striped table-bordered text-center"
                    style="border-collapse:collapse;">
                        
                    <thead>
                    
                        <tr>
                            <th>Student Name</th>
                            <th>Matric ID</th>
                            <th>Course Code</th>
                            <th>Course Name</th>
                            <th>Mark Now</th>
                        </tr>
                    </thead>

                    <tbody>
                            @foreach ($data as $row)
                                <tr>
                                    <td>{{ $row->std_name }}</td>
                                    <td>{{ $row->std_id }}</td>
                                    <td>{{ $row->crs_id }}</td>
                                    <td>{{ $row->crs_name }}</td>
                                    <td>
                                        <a href="/addmarks2/{{ $row->std_id }}">
                                        <button type="button" class="btn btn-info">Mark</button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    <tfoot>
                        <tr style="display:none;">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection