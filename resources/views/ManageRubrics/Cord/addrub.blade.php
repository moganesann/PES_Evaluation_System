@extends('Clayout')
@section('content')
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
            <div class="col-md-4 text-center pt-2">
                
            

            </div>
            <div class="col-md-1  pt-2">

            </div>
            <div class="col-md-3  pt-2">

            </div>
        </div>
        <form action="/viewrubric" method="post">
            @csrf
            <div class="row py-4">
                <div class="col-md-2"> </div>
                <div class="col-md-8 border rounded">
                    <table class="table table-borderless table">
                        <tbody>
                            <thead >
                                <tr>
                                    <th>Rubric ID</th>
                                    <th>Course ID</th>
                                </tr>
                            </thead>

                            <tr>
                                <td>
                                    <input style="width:80%;" name="rubricid" type="text" class="form-control form-control-sm"
                                        id="rubricid" placeholder="Rubric ID" value="{{ $rubricid }}"
                                        readonly></input>
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
                                    <th>Rubric Type</th>
                                    <th>Co</th>
                                </tr>
                            </thead>

                            <tr>
                                <td>
                                    <select style="width:80%;" id="rubrictype" name="rubrictype" required>

                                        <option value="PSM1 -1">
                                            PSM1-1 
                                        </option>
                                        <option value="PSM1 -2">
                                            PSM1-2 
                                        </option>
                                        <option value="PSM1 -3">
                                            PSM1-3 
                                        </option>
                                        <option value="PSM2 -1">
                                            PSM2-1 
                                        </option>
                                        <option value="PSM2 -2">
                                            PSM2-2 
                                        </option>
                                        <option value="PSM2 -3">
                                            PSM2-3 
                                        </option>
                                        <option value="PTA -1">
                                            PTA1
                                        </option>
                                        <option value="PTA -2">
                                            PTA2
                                        </option>
                                        <option value="PTA -3">
                                            PTA3
                                        </option>
                                    </select>
                                </td>
                                <td>
                                <input style="width:80%;" name="co" type="text" class="form-control form-control-sm"
                                        id="co" required></input>
                                </td>
                            </tr>
                            <thead>
                                <tr>
                                    <th>Criteria</th>
                                    <th>Weight</th>
                                </tr>
                            </thead>

                            <tr>
                                <td>

                                    <textarea name="criteria" type="text" class="form-control form-control-sm"
                                        id="criteria" placeholder="Enter Criteria" required></textarea>


                                </td>
                                </td>
                                <td>

                                    <textarea name="weight" type="text" class="form-control form-control-sm"
                                        id="weight" placeholder="Enter Weight" required></textarea>
                                </td>

                            </tr>

                            <thead>
                                <tr>
                                    <th>Score</th>
                                    <th>Mark 0</th>
                                </tr>
                            </thead>

                            <tr>
                                <td>

                                    <textarea name="score" type="text" class="form-control form-control-sm"
                                        id="score" placeholder="Enter Score" required></textarea>


                                </td>
                                </td>
                                <td>

                                    <textarea name="mark0" type="text" class="form-control form-control-sm"
                                        id="mark0" placeholder="Enter Mark 0 Description" required></textarea>
                                </td>

                            </tr>

                            <thead>
                                <tr>
                                    <th>Mark 1</th>
                                    <th>Mark 2</th>
                                </tr>
                            </thead>

                            <tr>
                                <td>

                                    <textarea name="mark1" type="text" class="form-control form-control-sm"
                                        id="mark1" placeholder="Enter Mark 1 Description" required></textarea>


                                </td>
                                </td>
                                <td>

                                    <textarea name="mark2" type="text" class="form-control form-control-sm"
                                        id="mark2" placeholder="Enter Mark 2 Description" required></textarea>
                                </td>

                            </tr>

                            <thead>
                                <tr>
                                    <th>Mark 3</th>
                                    <th>Mark 4</th>
                                </tr>
                            </thead>

                            <tr>
                                <td>

                                    <textarea name="mark3" type="text" class="form-control form-control-sm"
                                        id="mark3" placeholder="Enter Mark 3 Description" required></textarea>


                                </td>
                                </td>
                                <td>

                                    <textarea name="mark4" type="text" class="form-control form-control-sm"
                                        id="mark4" placeholder="Enter Mark 4 Description" required></textarea>
                                </td>

                            </tr>

                            <thead>
                                <tr>
                                    <th>Mark 5</th>
                                </tr>
                            </thead>

                            <tr>
                                <td>

                                    <textarea name="mark5" type="text" class="form-control form-control-sm"
                                        id="mark5" placeholder="Enter Mark 5 Description" required></textarea>


                                </td>
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
