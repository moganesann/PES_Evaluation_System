@extends('Clayout')

@section('content')

<title>Add Data</title>

<script>
        $(document).ready(function() {
            $('.searchbar2').select2();
            placeholder: " "
        });

    </script>
    <div class="container text-right mb-5 m-auto mt-5 ">
        <div class="row ">
            <div class="col-md-2 ">

            </div>
            <div class="col-md-2 text-center pt-2">
                
            <p style = "font-size:25px"><b> Data Entry</b></h2>

            </div>
            <div class="col-md-1  pt-2">

            </div>
            <div class="col-md-3  pt-2">

            </div>
        </div>
        <form action="/viewd" method="post">
            @csrf
            <div class="row py-4">
                <div class="col-md-2"> </div>
                <div class="col-md-8 border rounded">
                    <table class="table table-borderless table">
                        <tbody>
                            <thead >
                                <tr>
                                    <th>Student ID</th>
                                    <th>Course ID</th>
                                </tr>
                            </thead>

                            <tr>
                                <td>
                                    <input style="width:80%;" name="std_id" type="text" class="form-control form-control-sm"
                                        id="std_id" placeholder="Student ID"></input>
                                </td>
                                <td>
                                    <select style="width:80%;" id="crs_id" name="crs_id" required>

                                        <option value="BCC3012">
                                                 BCC3012 
                                        </option>
                                        <option value="BCC3024">
                                                  BCC3024 
                                        </option>
                                        <option value="DCC3012">
                                                  DCC3012
                                        </option>
                                        </select>
                                </td>
                            </tr>
                            <thead>
                                <tr>
                                    <th>Lect ID</th>
                                    <th>Title</th>
                                </tr>
                            </thead>

                            <tr>
                                <td>
                                    <select style="width:80%;" id="lect_id" name="lect_id" required>

                                        <option value="SE19015">
                                        SE19015 
                                        </option>
                                        <option value="SE18015">
                                        SE18015 
                                        </option>
                                    </select>
                                </td>
                                <td>
                                <input style="width:80%;" name="title" type="text" class="form-control form-control-sm"
                                        id="title" required></input>
                                </td>
                            </tr>
                            <thead>
                                <tr>
                                    <th>Student Name</th>
                                    <th>Student Email</th>
                                </tr>
                            </thead>

                            <tr>
                                <td>

                                    <input name="std_name" type="text" class="form-control form-control-sm"
                                        id="std_name" placeholder="Enter Student Name" required></input>


                                </td>
                                </td>
                                <td>

                                    <input name="std_email" type="text" class="form-control form-control-sm"
                                        id="std_email" placeholder="Enter Student Email" required></input>
                                </td>

                            </tr>

                            <thead>
                                <tr>
                                    <th>Student HP</th>
                                  
                                </tr>
                            </thead>

                            <tr>
                                <td>

                                    <input name="std_hp" type="text" class="form-control form-control-sm"
                                        id="std_hp" placeholder="Enter Student Hp" required></input>


                                </td>
                                </td>
                                

                            </tr>

                            <thead>
                                <tr>
                                    <th>Faculty</th>
                                </tr>
                            </thead>

                            <tr>
                                <td>

                                    <input name="std_fac" type="text" class="form-control form-control-sm"
                                        id="std_fac" value="FKOM" readonly></input>


                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-2">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 "></div>
                <div class="col-md-7 ">

                    <button type="submit" style="width:100%" class="m-5 mt-1 btn-block btn-primary">Save</button>
                </div>

                <div class="col-md-2 "></div>
            </div>
        </form>
    </div>



@endsection