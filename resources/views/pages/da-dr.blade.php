@extends('layouts.app')

@section('page-title', "Sell Guest Posts - Amit's Website")

@section('custom_css')

<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

<link rel="stylesheet" href="{{ asset('css/da-dr.css') }}">


@endsection('custom_css')

<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script> -->


@section('content')


<div class="main" id="fean">
    <div class="one">
        <div class="text cpl">
            <div class="cont">
                <h1 class="titleText">
                    DA Increase Services
                </h1>
                <p class="descriptionText">
                    Having higher domain authority means that your company has a higher chance of ranking on search
                    engines.
                    <br><br>
                    Select "<a href="#planJumper" class="linkText">DA Jumper Plan</a>" to increase 50+ domain
                    authority.
                    It will signal
                    to
                    Google
                    that your domain name
                    is popular
                    among brands.
                </p>
                <h3 class="miniTitle">
                    WHY INCREASE DA
                    <hr class="line">
                </h3>
                <ul class="ulDescription">
                    <div class="liDescriptionDivision">
                        <li class="liDescription">
                            <div class="iconLi">
                                <i class="fas fa-check"></i>
                            </div>
                            Sell GP on high price
                        </li>
                        <li class="liDescription">
                            <div class="iconLi">
                                <i class="fas fa-check"></i>
                            </div>
                            Build User Trust
                        </li>
                        <li class="liDescription">
                            <div class="iconLi">
                                <i class="fas fa-check"></i>
                            </div>
                            Build brand authority
                        </li>
                        <li class="liDescription">
                            <div class="iconLi">
                                <i class="fas fa-check"></i>
                            </div>
                            Overtake your competitors in DA
                        </li>
                    </div>
                    <li class="liDescription">
                        <div class="iconLi">
                            <i class="fas fa-check"></i>
                        </div>
                        Brand only mention high authority sites
                    </li>
                </ul>
            </div>
        </div>
        <div class="cImg">
            <img src="{{ asset('img/search_engine.svg') }}" alt="seo" class="img">
        </div>
    </div>

    <div class="two">
        <div class="cImg">
            <img src="{{ asset('img/ranking.svg') }}" alt="seo" class="img">
        </div>
        <div class="text tTwo cpr">
            <div class="cont">
                <h2 class="titleText">
                    DR Increase Services
                </h2>
                <p class="descriptionText">
                    Having higher domain rating means that your company has a higher chance of ranking on search
                    engines.
                    <br><br>
                    Select "da-dr.css<a href="#planJumper" class="linkText">DR Jumper Plan</a>" to increase 50+
                    domain
                    rating. It will
                    signal to
                    Google
                    that your domain
                    name is popular among brands.
                </p>
                <h3 class="miniTitle">
                    WHY INCREASE DA
                    <hr class="line">
                </h3>
                <ul class="ulDescription">
                    <div class="liDescriptionDivision">
                        <li class="liDescription">
                            <div class="iconLi">
                                <i class="fas fa-check"></i>
                            </div>
                            Sell GP on high price
                        </li>
                        <li class="liDescription">
                            <div class="iconLi">
                                <i class="fas fa-check"></i>
                            </div>
                            Build User Trust
                        </li>
                        <li class="liDescription">
                            <div class="iconLi">
                                <i class="fas fa-check"></i>
                            </div>
                            Build brand authority
                        </li>
                        <li class="liDescription">
                            <div class="iconLi">
                                <i class="fas fa-check"></i>
                            </div>
                            Overtake your competitors in DA
                        </li>
                    </div>
                    <li class="liDescription">
                        <div class="iconLi">
                            <i class="fas fa-check"></i>
                        </div>
                        Brand only mention high authority sites
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="plans">
        <div class="contTitlePlans">
            <hr class="hrp">
            <h2 class="titlePlan">
                Chose Plan
            </h2>
            <hr class="hrp">
        </div>
        <div class="contCards">
            <div class="card">
                <h3 id="planJumper" class="titleCards">
                    DA Jumper
                </h3>
                <p class="priceCard">
                    <sup class="dollar">$</sup>100/-
                </p>
                <ul class="ulDescription ulCard">
                    <li class="liDescription">
                        <div class="iconLi">
                            <i class="fas fa-check"></i>
                        </div>
                        100% Secure
                    </li>
                    <li class="liDescription">
                        <div class="iconLi">
                            <i class="fas fa-check"></i>
                        </div>
                        24/7 Support
                    </li>
                    <li class="liDescription">
                        <div class="iconLi">
                            <i class="fas fa-check"></i>
                        </div>
                        Quick Indexing
                    </li>
                    <li class="liDescription">
                        <div class="iconLi">
                            <i class="fas fa-check"></i>
                        </div>
                        Manual Link Building
                    </li>
                    <li class="liDescription">
                        <div class="iconLi">
                            <i class="fas fa-check"></i>
                        </div>
                        White Hat SEO Techniques
                    </li>
                    <li class="liDescription">
                        <div class="iconLi">
                            <i class="fas fa-check"></i>
                        </div>
                        No Increase in Spam Score
                    </li>
                </ul>
                <span class="tagCard">PREMANENT</span>
                <div class="daIncrement">
                    <p class="descriptionSDa">
                        DA-30+
                    </p>
                    <span class="daISpan">(In 45 - 60 Days)</span>
                </div>
                <!-- <button class="btnCard">Select</button> -->
                <!-- Button trigger modal -->
                <a type="button" class="btnCard" href="#openModal" onclick="asignarId('DA')" >Select</a>


            </div>
            <div class="card">
                <h3 id="planJumper" class="titleCards">
                    DA Jumper Premium
                </h3>
                <p class="priceCard">
                    <sup class="dollar">$</sup>120/-
                </p>
                <ul class="ulDescription ulCard">
                    <li class="liDescription">
                        <div class="iconLi">
                            <i class="fas fa-check"></i>
                        </div>
                        100% Secure
                    </li>
                    <li class="liDescription">
                        <div class="iconLi">
                            <i class="fas fa-check"></i>
                        </div>
                        24/7 Support
                    </li>
                    <li class="liDescription">
                        <div class="iconLi">
                            <i class="fas fa-check"></i>
                        </div>
                        Quick Indexing
                    </li>
                    <li class="liDescription">
                        <div class="iconLi">
                            <i class="fas fa-check"></i>
                        </div>
                        Manual Link Building
                    </li>
                    <li class="liDescription">
                        <div class="iconLi">
                            <i class="fas fa-check"></i>
                        </div>
                        White Hat SEO Techniques
                    </li>
                    <li class="liDescription">
                        <div class="iconLi">
                            <i class="fas fa-check"></i>
                        </div>
                        No Increase in Spam Score
                    </li>
                </ul>
                <span class="tagCard">PREMANENT</span>
                <div class="daIncrement">
                    <p class="descriptionSDa">
                        DA-40+
                    </p>
                    <span class="daISpan">(In 45 - 60 Days)</span>
                </div>
                <!-- <button class="btnCard">Select</button> -->
                <a type="button" class="btnCard" href="#openModal" onclick="asignarId('DAP')" >Select</a>
            </div>
            <div class="card">
                <h3 id="planJumper" class="titleCards">
                    Jetpack
                </h3>
                <p class="priceCard">
                    <sup class="dollar">$</sup>130/-
                </p>
                <ul class="ulDescription ulCard">
                    <li class="liDescription">
                        <div class="iconLi">
                            <i class="fas fa-check"></i>
                        </div>
                        100% Secure
                    </li>
                    <li class="liDescription">
                        <div class="iconLi">
                            <i class="fas fa-check"></i>
                        </div>
                        24/7 Support
                    </li>
                    <li class="liDescription">
                        <div class="iconLi">
                            <i class="fas fa-check"></i>
                        </div>
                        Quick Indexing
                    </li>
                    <li class="liDescription">
                        <div class="iconLi">
                            <i class="fas fa-check"></i>
                        </div>
                        Manual Link Building
                    </li>
                    <li class="liDescription">
                        <div class="iconLi">
                            <i class="fas fa-check"></i>
                        </div>
                        White Hat SEO Techniques
                    </li>
                    <li class="liDescription">
                        <div class="iconLi">
                            <i class="fas fa-check"></i>
                        </div>
                        No Increase in Spam Score
                    </li>
                </ul>
                <span class="tagCard">PREMANENT</span>
                <div class="daIncrement">
                    <p class="descriptionSDa">
                        DA-50+
                    </p>
                    <span class="daISpan">(In 45 - 60 Days)</span>
                </div>
                <!-- <button class="btnCard">Select</button> -->
                <a type="button" class="btnCard" href="#openModal" onclick="asignarId('JET')" >Select</a>
            </div>
        </div>
    </div>
</div>



<!--Eliminar -->

<style>
        .modalDialog {
        position: fixed;
        font-family: Arial, Helvetica, sans-serif;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: rgba(0,0,0,0.8);
        z-index: 99999;
        opacity:0;
        -webkit-transition: opacity 400ms ease-in;
        -moz-transition: opacity 400ms ease-in;
        transition: opacity 400ms ease-in;
        pointer-events: none;
    }
    .modalDialog:target {
        opacity:1;
        pointer-events: auto;
    }
    .modalDialog > div {
        width: 500px;
        position: relative;
        margin: 10% auto;
        padding: 5px 20px 13px 20px;
        border-radius: 10px;
        background: #ffff;
        /* background: -moz-linear-gradient(#fff, #999);
        background: -webkit-linear-gradient(#fff, #999);
        background: -o-linear-gradient(#fff, #999); */
    -webkit-transition: opacity 400ms ease-in;
    -moz-transition: opacity 400ms ease-in;
    transition: opacity 400ms ease-in;
    }
    .close {
        background: #606061;
        color: #FFFFFF;
        line-height: 25px;
        position: absolute;
        right: -12px;
        text-align: center;
        top: -10px;
        width: 24px;
        text-decoration: none;
        font-weight: bold;
        -webkit-border-radius: 12px;
        -moz-border-radius: 12px;
        border-radius: 12px;
        -moz-box-shadow: 1px 1px 3px #000;
        -webkit-box-shadow: 1px 1px 3px #000;
        box-shadow: 1px 1px 3px #000;
    }
    .close:hover { background: #00d9ff; }

    .form-control:focus {
        /* color: #212529; */
        /* background-color: #fff; */
        /* border-color: #86b7fe; */
        outline: 0;
        box-shadow: 0 0 0 0;
    }

</style>
<?php $id = 'JET'; ?>;

<a href="#openModal">Lanzar el modal prueba</a>

<div id="openModal" class="modalDialog ">
    <div class="p-4">
        <a href="#close" title="Close" class="close">&times;</a>
        <h2 class="text-center mb-4">Enter Website To Proceed</h2>
        <div class="form-div">
            <form method="POST" action="{{ route('buy.buyplan') }}">
                @csrf
                <input type="hidden" name="id" value="" id="planId" required="">
                <div class="webwrap input-group mb-3">
                    <input type="text" class="form-control webs" name="name" placeholder="Enter Website" required="">
                    <!-- <button class="p-3"> <i class="fa fa-plus moreWeb tr-first"></i></button> -->
                </div>
                <div class="moreWebsites"></div>

                <div class="w-100" style="text-align:right">
                    <button class="btn btn-default pull-right submitBtn" style="color:white" type="submit">Proceed</button>
                    <!-- <a href="" class="btn btn-default pull-right submitBtn" style="color:white" > Proceed </a> -->
                </div>
            </form>
        </div>
    </div>
</div>

<script>

    function asignarId( tip ){
        switch (tip) {

            case 'DA':
                var x = document.getElementById("planId").value = 'DA';
                <?php $id = 'DA'; ?>;
                console.log('<?php echo $id; ?>', x);

                break;

            case 'DAP':
                var x = document.getElementById("planId").value = 'DAP';
                <?php $id = 'DAP'; ?>;
                console.log('<?php echo $id; ?>', x);

                break;

            case 'JET':
                var x = document.getElementById("planId").value = 'JET';
                <?php $id = 'JET'; ?>;
                console.log('<?php echo $id; ?>', x);

            break;                

        }
    }

</script>

@endsection('content')

