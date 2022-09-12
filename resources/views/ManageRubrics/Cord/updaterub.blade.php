@extends('Clayout')
@section('content')
    <script>
        $(document).ready(function() {
            $('.searchbar2').select2();
            placeholder: " "
        });

    </script>
    
    @foreach ($rubrics as $rub)
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
                    echo '<form action="/updaterubric" method="post" onsubmit="return confirm(\'Confirm Edit To Existing Data?\');">';
                        @endphp
                        @csrf

            <div class="row py-4">
                <div class="col-md-2"> </div>
                <div class="col-md-8 border rounded">
                    <table class="table table-borderless table">
                        <tbody>
                            <thead class="thead-dark">
                                <tr>
                                    <th>Rubric ID</th>
                                    <th>Course ID</th>
                                </tr>
                            </thead>

                            <tr>
                            <td>
                                    <input style="width:80%;" name="rubricid" type="text" class="form-control form-control-sm"
                                        id="rubricid" value="{{ $rub->rubricid }}"
                                        readonly></input>
                            </td>
                            <td>
                                    <select style="width:80%;" id="crs_id" name="crs_id" required>

                                        <option value="{{ $rub->crs_id }}">
                                        </option>
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

                                        <option value="{{ $rub->rubrictype }}">
                                        </option>
                                        <option value="PSM1 -1">
                                            PSM1 -1
                                        </option>
                                        <option value="PSM1 -2">
                                            PSM1 -2
                                        </option>
                                        <option value="PSM1 -3">
                                            PSM1 -3
                                        </option>
                                        <option value="PSM2 -1">
                                            PSM2 -1
                                        </option>
                                        <option value="PSM2 -2">
                                            PSM2 -2
                                        </option>
                                        <option value="PSM2 -3">
                                            PSM2 -3
                                        </option>
                                        <option value="PTA1">
                                            PTA1
                                        </option>
                                        <option value="PTA2">
                                            PTA2
                                        </option>
                                        <option value="PTA3">
                                            PTA3
                                        </option>
                                    </select>
                                </td>
                                <td>
                                <input style="width:80%;" name="co" type="text" class="form-control form-control-sm"
                                        id="co" value="{{ $rub->co }}"required></input>
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
                                <input style="width:80%;" name="criteria" type="text" class="form-control form-control-sm"
                                        id="criteria" value="{{ $rub->criteria }}"required></input>
                                </td>
                                </td>
                                <td>
                                <input style="width:80%;" name="weight" type="text" class="form-control form-control-sm"
                                        id="weight" value="{{ $rub->weight }}"required></input>
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
                                <input style="width:80%;" name="score" type="text" class="form-control form-control-sm"
                                        id="score" value="{{ $rub->score }}"required></input>
                                </td>
                                </td>
                                <td>
                                <input style="width:80%;" name="mark0" type="text" class="form-control form-control-sm"
                                        id="mark0" value="{{ $rub->mark0 }}"required></input>
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

                                <input style="width:80%;" name="mark1" type="text" class="form-control form-control-sm"
                                        id="mark1" value="{{ $rub->mark1 }}"required></input>


                                </td>
                                </td>
                                <td>

                                <input style="width:80%;" name="mark2" type="text" class="form-control form-control-sm"
                                        id="mark2" value="{{ $rub->mark2 }}"required></input>
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

                                <input style="width:80%;" name="mark3" type="text" class="form-control form-control-sm"
                                        id="mark3" value="{{ $rub->mark3 }}"required></input>


                                </td>
                                </td>
                                <td>

                                <input style="width:80%;" name="mark4" type="text" class="form-control form-control-sm"
                                        id="mark4" value="{{ $rub->mark4 }}"required></input>
                                </td>

                            </tr>

                            <thead>
                                <tr>
                                    <th>Mark 5</th>
                                </tr>
                            </thead>

                            <tr>
                                <td>

                                <input style="width:80%;" name="mark5" type="text" class="form-control form-control-sm"
                                        id="mark5" value="{{ $rub->mark5 }}"required></input>


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
            </div>
        </body>
    @endforeach

@endsection
