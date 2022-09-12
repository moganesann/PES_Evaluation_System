@extends('Elayout')

@section('content')
<!-- second main Evalutor view -->
<title>Evaluation</title>

<style>
    .container1 {
        margin: 80px;
        margin-top: 5px;
    }

    .btn btn-primary
    {
        width:250px;
    }
    .block:hover {
        background-color: #ddd;
        color: black;
    }

</style>

<div class="container1">
    <div class="row">
        <div class="col-3">
            <br>
            <p style = "font-size:25px"><b>Evaluation</b></h2>
            <br><br>
        </div>

        <div class="container" style="text-align:center;">
            <div class="row center" style="margin-top:50px; margin-bottom:-150px;">
                <div class="container col-md-4">
                    <div class="card" style=" width: 25rem;">
                        <img style="height:162px " class="card-img-top"
                            src="https://thumbs.dreamstime.com/b/evaluation-complex-like-puzzle-pictured-as-word-evaluation-puzzle-pieces-to-show-evaluation-can-be-difficult-164221912.jpg"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><b>Second Evaluation</b></h5>
                            <br>
                            <a href="/unmarkedlist2"><button type="button" class="btn btn-primary" id="first" style=>Unmarked Lists</button></a>
                            <br><br>
                            <a href="/markedlist2"><button type="button" class="btn btn-primary" id="second">Marked Lists</button></a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection