@extends('SVlayout')

@section('content')

<title>Marked Lists First Evaluation</title>
<!-- Supervisor First Evaluation Mark Lists -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
</script>
<link rel="stylesheet" href="path/to/fontawesome.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
</script>

<script type="text/javascript" class="init">
        $(document).ready(function() {
            $('#marked').DataTable({
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
            <p style = "font-size:25px"><b>First Evaluation Marked Student Lists</b></h2>
            <br><br>
        </div>

        <div class="row">
            <div class="col-md-12">

                <table id="marked"class="p-auto m-auto display table table-striped table-bordered text-center"
                        style="border-collapse:collapse;">
                    <thead>
                    
                        <tr>
                            <th>Student Name</th>
                            <th>Matric ID</th>
                            <th>Course Code</th>
                            <th>Course Name</th>
                            <th>Marks</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                    @foreach ($data as $row)
                        <tr>
                            <td>{{ $row->std_name }}</td>
                            <td>{{ $row->std_id }}</td>
                            <td>{{ $row->crs_id }}</td>
                            <td>{{ $row->crs_name }}</td>
                            <td>{{ $row->marksev1 }}</td>
                            <td>
                                <a href="/updatemarks1/{{ $row->ev_id }}" class="btn">
                                <button type="button" class="btn btn-warning">
                                    <i class="fas fa-cog fa-sm"></i>
                                    </button>
                                </a>
                            </td>
                            <td>
                                <a href="/delete1/{{ $row->ev_id }}">
                                    <button class="btn btn-danger" type="submit"
                                        onclick="return confirm('Do you really want to delete?')">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </a>    
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                    <tfoot style="display:none;">
                        <tr >
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