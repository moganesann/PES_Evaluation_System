@extends('Clayout')

@section('content')

<title>Data Entry</title>

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
            $('#ps1dataentry').DataTable({
                "pageLength": 5,
                "lengthMenu": [
                    [5, 10, 25, 50, -1],
                    [5, 10, 25, 50, "All"]
                ]
            });
        });

</script>

    <div class="container center p-5">
        <div class="row">
            <div class="col-md-11">
                <p style = "font-size:25px"><b> Data Entry</b></h2>
            </div>
            <div class="col-md-1">
                <button type="buttton" class="btn-lg btn-primary text-light">
                    <a style="text-decoration:none;" class="text-light" href="/adddata"><i
                            class="fas fa-plus-circle fa-lg"></i></a>
                </button>
                <br><br>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <table id="ps1dataentry" class="p-auto m-auto display table table-striped table-bordered text-center"
                        style="border-collapse:collapse;">
                        <thead>
                      
                        <tr>
                                
                            <tr>
                            <th scope="col">Student Name</th>
                            <th scope="col">Matric ID</th>
                            <th scope="col">Course ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Lecturer ID</th>
                            <th scope="col">Supervisor</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                        </tr>
                            
                        </thead>

                        <tbody>
                            @foreach ($data as $row1)
                            <tr id = "row1" name ="row1">
                                <td>{{ $row1->std_name }}</td>
                                <td>{{ $row1->std_id }}</td>
                                <td>{{ $row1->crs_id }}</td>
                                <td>{{ $row1->title }}</td>
                                <td>{{ $row1->lect_id }}</td>
                                <td>{{ $row1->lect_name }}</td>
                                <td>
                                    <a href="/updatedata/{{ $row1->std_id }}" class="btn">
                                        <button type="button" class="btn btn-warning">
                                            <i class="fas fa-cog fa-sm"></i>
                                        </button>
                                    </a>
                                </td>

                                <td>
                                <a href="/deletedata/{{ $row1->std_id }}">
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
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
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
            <div class="row">
                <div class="col-md-12">

                </div>

            </div>
        </div>
    </div>




@endsection