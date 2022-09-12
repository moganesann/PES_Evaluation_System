@extends('Stdlayout')
@section('content')
<title>Progress</title>

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


<div class="container">
    <div class="row">
        <div class="col-md-11">
            <br>
            <p style = "font-size:25px"><b>Progress</b></h2>
            <br><br>
        </div>

        <div class="row">
            <div class="col-md-12">

            <form action="{{ route('projectsvr.search') }}" method="GET" class="d-flex"> 
                <input class="form-control me-2" type="searchstd" name="query3" placeholder="Enter your Name" aria-label="Search"> 
                <button class="btn btn-outline-success" type="submit">Search</button> </form>

               
            </div>
        </div>

        <div class="container col-md-2"></div>
    </div>
    <br><br>
        <br><br>
        <br><br>
        <div class="col text-center">
                         
                        </div>
</div>


@endsection