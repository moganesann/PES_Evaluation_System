@extends('Clayout')

@section('content')
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
            <p style = "font-size:25px"><b>Coordinator Home Page</b></h2>
            <br><br>
        </div>

        <div class="container" style="text-align:center;">
            <div class="row center" style="margin-top:50px; margin-bottom:-150px;">
                <div class="container col-md-4">
                    <div class="card" style=" width: 25rem;">
                        <img style="height:162px " class="card-img-top"
                            src="https://blog.insynctraining.com/hubfs/34404543_s.jpg"
                            alt="Card image cap">
                        <div class="card-body">
                            <br>
                            <a href="/cviewdata"><button type="button" class="btn btn-primary" id="first" style=>Data Entry</button></a>
                            <br><br>
                            <a href="/skdhome"><button type="button" class="btn btn-primary" id="second">Schedule</button></a>
                            <br><br>
                            <a href="/cviewrubrichome"><button type="button" class="btn btn-primary" id="second">Rubrics</button></a>
                            <br><br>
                            <a href="/top-20-students"><button type="button" class="btn btn-primary" id="second">Top 20</button></a>
                            <br><br>
                            <a href="/maincord"><button type="button" class="btn btn-primary" id="second">Report</button></a>
                            <br><br>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection