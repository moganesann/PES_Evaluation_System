@extends('SVlayout')

@section('content')
<!-- Add Marks Supervisor view Third Evalution-->
<title>Add Marks Third Evaluation</title>

<style>

</style>

<script type="text/javascript" class="init">
        $(document).ready(function() {
            $('#markrubric').DataTable({
                "pageLength": 5,
                "lengthMenu": [
                    [5, 10, 25, 50, -1],
                    [5, 10, 25, 50, "All"]
                ]
            });
        });

    </script>

<form action="/markedlist3" method = "post" >
            @csrf
<div class="container">
    <div class="row">
        <div class="col-5">
            <br>
            <p style = "font-size:25px"><b>Third Evaluation Add Marks</b></h2>
            <br><br>
        </div>
<!-- Print Student Details -->
        <div class="col-md-12">
        @foreach ($data as $row)
            <div class="mb-3 row">
                <label for="stdid" class="col-sm-2 col-form-label">Student ID :</label>
                <div class="col-sm-10">
                <input style="width:650px;height:28px; border: 1px solid black; border-radius: 4px;" name="std_id" type="text" class="form-control form-control-sm"
                id="std_id" placeholder="Student ID" value="{{ $row->std_id }} " readonly>
                </input>   
                </div>
            </div>

            <div class="mb-3 row">
                <label for="stdname" class="col-sm-2 col-form-label">Student Name :</label>
                <div class="col-sm-10">
                <input style="width:650px;height:28px; border: 1px solid black; border-radius: 4px;" name="std_name" type="text" class="form-control form-control-sm"
                id="std_name" placeholder="Student Name" value="{{ $row->std_name }}" readonly>
                </input>   
                </div>
            </div>

            <div class="mb-3 row">
                <label for="cname" class="col-sm-2 col-form-label">Course : </label>
                <div class="col-sm-10">
                <input style="width:500px;height:28px; border: 1px solid black;border-radius: 4px;" name="cname" type="text" class="form-control form-control-sm"
                id="cname" placeholder="Course Name" value="{{ $row->crs_id }} {{$row->crs_name }}" readonly>
                </input>     
            </div>
            
            </div>  
                    

            <div class="mb-3 row">
                <label for="cname" class="col-sm-2 col-form-label">Evaluation ID : </label>
                <div class="col-sm-10">
                <input style="width:500px;height:28px; border: 1px solid black;border-radius: 4px;" name="ev_id" type="text" class="form-control form-control-sm"
                id="ev_id" placeholder="Evaluation ID" value="{{ $row->ev_id }}" readonly>
                </input>     
            </div>
            <br> @endforeach 
            </div> 

        </div>
        <!-- Print Rubrics according to course and evaluation type -->
        <div class="row">
            <div class="col-md-10">
                <table id="markrubric" class="table table-bordered text-center">
                    <thead class="thead-dark">
                    
                        <tr>
                            <th scope="col">Co</th>
                            <th scope="col">Criteria</th>
                            <th scope="col">5</th>
                            <th scope="col">4</th>
                            <th scope="col">3</th>
                            <th scope="col">2</th>
                            <th scope="col">1</th>
                            <th scope="col">0</th>
                            <th scope="col">Weightage</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                    @foreach ($data1 as $row1)
                        <tr id = "row1" name ="row1">
                            <td>CLO {{ $row1->co }}</td>
                            <td style ="text-align: left">{{ $row1->criteria }}</td>
                            <td>{{ $row1->mark5 }}</td>
                            <td>{{ $row1->mark4 }}</td>
                            <td>{{ $row1->mark3 }}</td>
                            <td >{{ $row1->mark2 }}</td>
                            <td>{{ $row1->mark1 }}</td>
                            <td>{{ $row1->mark0 }}</td>
                            <td >{{ $row1->weight }}</td>
                        </tr>
                        <script>
                        
                                function add_number() {
                                    var w = parseFloat(document.getElementById("weight").value);
                                    var a = parseFloat(document.getElementById("mark").value);
                                    if (isNaN(a)) a = 0;
                                    var result = w * a;
                                    var answer = (Math. round((result * 1000)/10)/100). toFixed(1);
                                    document.getElementById("score").value = answer;
                                } 
                        </script>
                        @endforeach
                    </tbody>

                    <tfoot style="display:none;">
                        <tr>
                            <td></td>
                            <td></b></td>
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
            
            <div class="col-md-2">
            
                    <tbody>

                        <thead>
                            <tr>
                                <th>First Evaluation Marks </th>
                            </tr>
                        </thead>
                        <tr>@foreach ($data as $row)
                            <td>
                                <input style="width:50px;" name="marksev1" type="text" class="form-control form-control-sm"
                                    id="marksev1" value="{{ $row->marksev1 }}" required readonly>
                                </input>

                            </td>
                        </tr>
                        <br>
                        <thead>
                            <tr>
                                <th>Second Evaluation Marks </th>
                            </tr>
                        </thead>
                        <tr>
                            <td>
                                <input style="width:50px;" name="marksev2" type="text" class="form-control form-control-sm"
                                    id="marksev2" value="{{ $row->marksev2 }}" readonly required>
                                <span style="color:red">@error('marksev2'){{ $message }} @enderror</span>
                                </input>

                            </td>
                        </tr>
                        <br>
                        <thead>
                            <tr>
                                <th>Third Evaluation Marks </th>
                            </tr>
                        </thead>
                        <tr>
                            <td>
                                <input style="width:50px;" name="marksev3" type="text" class="form-control form-control-sm"
                                    id="marksev3" value="{{ $row->marksev3 }}" required>/30
                                <span style="color:red">@error('marksev2'){{ $message }} @enderror</span>
                                </input>

                            </td>
                        </tr>
                        @endforeach
                        <br><br>
                            <button style="width:150px;" class="btn btn-primary" style="float: right">Add Marks</button>
                  
                    </tbody>
                </form>
              
            </div>
        </div>
    </div>
</div>
@endsection