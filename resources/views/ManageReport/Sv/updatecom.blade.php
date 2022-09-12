@extends('SVlayout')
@section('content')
<title>Student Progress</title>
    <script>
        $(document).ready(function() {
            $('.searchbar2').select2();
            placeholder: " "
        });

    </script>
       <div class="container">
        <h2>Update Student Progress</h2>

    </div>
    
    @foreach ($progress as $com)
        <title></title>

        <body>
        <div class="container text-right mb-5 m-auto mt-5 ">
        <div class="row ">
            <div class="col-md-2 ">

            </div>
            <div class="col-md-4 text-center pt-2">
                
            

            </div>
            <div class="col-md-1  pt-2">

            </div>
            <div class="col-md-3  pt-2">

            </div>
        </div>
        @php
                    echo '<form action="/updatecomment" method="post" onsubmit="return confirm(\'Confirm Edit To Existing Data?\');">';
                        @endphp
                        @csrf

            <div class="row py-4">
                <div class="col-md-2"> </div>
                <div class="col-md-8 border rounded">
                    <table class="table table-borderless table">
                        <tbody>
                            <thead>
                                <tr>
                                    <th>Student ID</th>
                                    </tr>
                            </thead>

                            <tr>
                            <td>
                                    <input style="width:80%;" name="std_id" type="text" class="form-control form-control-sm"
                                        id="std_id" value="{{ $com->std_id }}"
                                        readonly></input>
                            </td>
                            </tr>
                            
                            <thead>
                                <tr>
                                    <th>Progress</th>
                                    <th>Comments</th>
                                </tr>
                            </thead>

                            <tr>
                            <td>
                                    <input style="width:80%;" name="progress_perc" type="text" class="form-control form-control-sm"
                                        id="progress_perc" value="{{ $com->progress_perc }}"
                                        required></input>
                            </td>
                            <td>
                                <input style="width:80%;" name="comments" type="text" class="form-control form-control-sm"
                                        id="comments" value="{{ $com->comments }}"required></input>
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

                    <button type="submit" style="width:100%" class="m-5 mt-1 btn-block btn-primary btn-lg">SAVE</button>
                </div>

                <div class="col-md-2 "></div>
            </div>
        </form>
        <div class="col text-center">
                         <a href="/svreport"><button class="btn btn-info btn-lg float-center"> BACK</button></a>
                        </div>

    </div>
            </div>
        </body>
    @endforeach

@endsection