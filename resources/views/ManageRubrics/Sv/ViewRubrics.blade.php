@extends('SVlayout')
@section('content')
<style>
        button {
            margin-top: 10px;
            width: 180px;
        }

    </style>
    <div class="container">
        <h2>Select Rubric Type</h2>

    </div>
    <div class="container" style="text-align:center;">
        <div class="row center" style="margin-top:50px;">
           
            <div class="container col-md-4">
                <div class="card" style=" width: 18rem;">
                    <img style="height:162px " class="card-img-top"
                        src="https://agilemercurial.files.wordpress.com/2018/08/psm-3.png"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><b>PSM 1</b></h5>
                        <a href="/spsm11"><button class="dt-button">PSM1 1st Evaluation</button></a>
                        <a href="/spsm12"><button class="dt-button">PSM1 2nd Evaluation</button></a>
                        <a href="/spsm13"><button class="dt-button">PSM1 3rd Evaluation</button></a>
                    </div>
                </div>

            </div>
            <div class="container col-md-4">
                <div class="card" style=" width: 18rem;">
                    <img style="height:162px " class="card-img-top"
                        src="https://agilemercurial.files.wordpress.com/2018/08/psm-3.png"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><b>PSM 2</b></h5>
                        <a href="/spsm21"><button class="dt-button">PSM2 1st Evaluation</button></a>
                        <a href="/spsm22"><button class="dt-button">PSM2 2nd Evaluation</button></a>
                        <a href="/spsm23"><button class="dt-button">PSM2 3rd Evaluation</button></a>
                    </div>
                </div>
                

            </div>
            <div class="container col-md-4">
                <div class="card" style=" width: 18rem;">
                    <img style="height:162px " class="card-img-top"
                        src="https://img.cdn.schooljotter2.com/sampled/12261462/900/0/nocrop//"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><b>PTA</b></h5>
                        <a href="/spta1"><button class="dt-button">PTA 1st Evaluation</button></a>
                        <a href="/spta2"><button class="dt-button">PTA 2nd Evaluation</button></a>
                        <a href="/spta3"><button class="dt-button">PTA 3rd Evaluation</button></a>
                    </div>
                </div>

            </div>
            <div class="container col-md-2"></div>
        </div>
    </div>
    
@endsection