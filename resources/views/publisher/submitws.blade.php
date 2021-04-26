@extends('layouts.app')

@section('page-title', "Publisher Dashboard")

@section('custom_css')

<link rel="stylesheet" href="{{ asset('css/btcustom.css') }}">

<link rel="stylesheet" href="{{ asset('css/websiteadd.css') }}">

<link rel="stylesheet" href="{{ asset('css/orders.css') }}">

@endsection('custom_css')

@section('content')

<div class="container mt-5">
	<div class="row">
        
        <div class="col-12 mt-3">
            <div class="col-12 row">
                <div class="col-12">
                    <div class="pb-3 heading mb-4">
                        <div class="container mt-4">
                            <div class="row">
                                <div class="col-8">
                                    <h1 class="h1-heading">
                                        Advertiser »
                                        <span class="text-muted"> Websites » Add New Website</span>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-2 dashboard_sidebar">
            <style>
                .sidebar-list li a:hover{
                    color: black !important;
                                }
            </style>
            <ul class="sidebar-list">

                <li>
                    <strong>Account Balance</strong>
                    <br>
                    <span style="color:yellow !important;" class="fa-2x text-success">$0</span>
                </li>

                <hr style="background-color: white;">

                <li>
                    <a href="{{ route('publisher.index') }}" class="dashboard" class="orders" style="color: white;">Dashboard</a>
                </li>

                <li>
                    <a href="{{ route('publisher.websites') }}" class="dashboard" style="color: #0090bf; background: #eff1f1; font-weight: 500;">Websites</a>
                </li>

                <hr style="background-color: white;">

                <li>
                    <a href="{{ route('publisher.orders') }}" class="orders" style="color: white;">Orders</a>
                </li>

                <li>
                    <a href="{{ route('publisher.earning') }}" class="orders" style="color: white;">Earning</a>
                </li>

            </ul>
            <a href="{{ route('da-dr-increase-service') }}"><img src="https://www.buysellguestpost.com/assets/images/j.jpg" style="width: 100%;margin-top: 20px;margin-bottom: 20px;" alt=""></a> 

            <script>
                $(".sidebar-list .websites").addClass("active");
                $('.sidebar-list .websites').css("color:#0090BF;");
                $(".sidebar-list .dashboard,.sidebar-list .inbox,.sidebar-list .ordesidebar-list .earning").css('color', 'white');
            </script>

        </div>

        <style>
            .progressbar-wrapper {
                background: #fff;
                width: 100%;
                padding-top: 10px;
                padding-bottom: 5px;
            }

            .progressbar li {
                list-style-type: none;
                width: 25%;
                float: left;
                font-size: 12px;
                position: relative;
                text-align: center;
                text-transform: uppercase;
                color: #7d7d7d;
                cursor: pointer;
            }

            .progressbar li:before {
                width: 40px;
                height: 40px;
                content: "";
                line-height: 40px;
                border: 2px solid #7d7d7d;
                display: block;
                text-align: center;
                margin: 0 auto 3px auto;
                border-radius: 50%;
                position: relative;
                z-index: 2;
                background-color: #fff;
            }
            .progressbar li:after {
                width: 100%;
                height: 2px;
                content: '';
                position: absolute;
                background-color: #7d7d7d;
                top: 30px;
                left: -50%;
                z-index: 0;
            }
            .progressbar li:first-child:after {
                content: none;
            }

            .progressbar li.activeStepper {
                color: black;
                font-weight: bold;  
            }
            .progressbar li.activeStepper:before {
                border-color: #007bff;
                background: #007bff;
            }
            .progressbar li.activeStepper + li:after {
                background-color: #007bff;
            }

            .progressbar li.activeStepper:before {
                color: white;
                background: #007bff  url(user.svg) no-repeat center center;
                background-size: 60%;
            }
            .progressbar li::before {
                background: #fff url(user.svg) no-repeat center center;
                background-size: 60%;
            }

            .progressbar {
                counter-reset: step;
            }
            .progressbar li:before {
                content: counter(step);
                counter-increment: step; 
            }

            .progressbar li:after {
                top: 20px; 
            }

        </style>

        <div class="col-md-10" style="padding: 0 0 0 40px">

            <div class="col-12">
                <h1 class="text-center" style="font-weight: bold;">
                    Submit New Website
                </h1>
            </div>
        	
        	<div class="col-md-12 mb-5">
            
                <div class="progressbar-wrapper">
                    <ul class="progressbar">
                        <li class="activeStepper">Step 1</li>
                        <li>Step 2</li>
                        <li>Step 3</li>
                        <li>Step 4</li>
                    </ul>
                </div>                    
            
        	</div>

            <div class="col-12 pt-5">
            
<!--  -->
                <div class="col-12 m-auto mt-3">
                    <form>

                        <div class="p-5" style="background-color: #eff1f166;">
                            <h2 class="text-center" style="font-weight: bold;">Website</h2>
                            <div >
                                <div class="form-row mt-4">
                                    <div class="col-12 ">
                                        <input class="form-control" type="text" style="font-size: 22px;" name="web_url" id="web_url" placeholder="http://example.com">
                                    </div>
                                </div>
                                <div class="mt-4 text-center">
                                    <button class="btn" style="color: white; background-color: #007bff; width: 25%;padding: 10px;" id="website_tab_next" urlchecked="false" type="button" title="Next">Next</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
<!--  -->
            </div>

        </div>

    </div>
</div>

@endsection('content')