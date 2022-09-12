@extends('SVlayout')

@section('content')
    <title>PSM1 Rubric</title>
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
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js">
</script>
    <script type="text/javascript" class="init">
        $(document).ready(function() {
            $('#itemList').DataTable({
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
                <h1>PSM1 2nd Evaluation Rubric</h1>
            </div>
            
            <div class="row">
                <div class="col-md-12">

                    <table id="itemList" class="p-auto m-auto display table table-striped table-bordered text-center"
                        style="border-collapse:collapse;">
                        <thead>
                      
                      <tr>
                         
                          <th>Co</th>
                          <th>Criteria</th>
                          <th>5</th>
                          <th>4</th>
                          <th>3</th>
                          <th>2</th>
                          <th>1</th>
                          <th>0</th>
                          <th>Weight</th>
                          <th>Score</th>
                      </tr>
                  </thead>
                      @foreach ($rubrics as $rub)
                          <tr>
                            
                              <td>{{ $rub->co }}</td>
                              <th>{{ $rub->criteria }}</th>
                              <td>{{ $rub->mark5 }}</td>
                              <td>{{ $rub->mark4 }}</th>
                              <td>{{ $rub->mark3 }}</td>
                              <td>{{ $rub->mark2 }}</td>
                              <td>{{ $rub->mark1 }}</td>
                              <td>{{ $rub->mark0 }}</th>
                              <td>{{ $rub->weight }}</td>
                              <td>{{ $rub->score }}</td>
                              
                          </tr>
                      @endforeach
                 
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