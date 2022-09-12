@extends('Clayout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 style="font-weight: bold">Calculate Top 20</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table id="marked" class="p-auto m-auto display table table-striped table-bordered text-center" style="border-collapse:collapse;">
                <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Matric ID</th>
                        <th>Project Title</th>
                        <th>Supervisor Name</th>
                        <th>Marks</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($top20Students as $student)
                    <tr>
                        <td>{{ $student->std_name }}</td>
                        <td>{{ $student->std_id }}</td>
                        <td>{{ $student->title }}</td>
                        <td>{{ $student->std_fac }}</td>
                        <td>{{ $student->markstotal }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-2">
            <a href="/f" class="btn btn-success">TOP 20</a>
        </div>
        <div class="col-md-2" style="float: left;margin-left: -100px;">
            <a href="/" class="btn btn-danger">CANCEL</a>
        </div>
    </div>
</div>
@endsection

<!-- <a href="/download-pdf"><button class="btn btn-success">TOP 20</button></a>
<a href="/maincord"><button class="btn btn-info">CANCEL</button></a> -->