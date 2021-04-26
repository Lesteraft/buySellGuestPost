@extends('layouts.app')

@section('page-title', "Advertiser Dashboard")

@section('custom_css')

<link rel="stylesheet" href="{{ asset('css/btcustom.css') }}">

<link rel="stylesheet" href="{{ asset('css/websiteadd.css') }}">

<link rel="stylesheet" href="{{ asset('css/advertiser.css') }}">

@endsection('custom_css')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-12 mt-4">
            <livewire:heading2 site="advertiser" currentlySite="Deposit Funds" />
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
                    <span style="color:yellow !important;" class="fa-2x text-success">$0.00</span>
                </li>

                <hr style="background-color: white;">

                <li>
                    <a href="{{ route('advertiser.deposit') }}" class="orders dashboard" style="color: #0090bf; background: #eff1f1; font-weight: 500;">+ Deposit Funds</a>
                </li>

                <hr style="background-color: white;">

                <li>
                    <a href="{{ route('advertiser.index') }}" class="orders" style="color: white;">Dashboard</a>
                </li>

                <li>
                    <a href="{{ route('advertiser.orders') }}" class="orders" style="color: white;">Orders</a>
                </li>

                <li>
                    <a href="{{ route('advertiser.serviceo') }}" class="earning" style="color: white;">Service Orders</a>
                </li>

                <li>
                    <a href="{{ route('advertiser.dadr') }}" class="earning" style="color: white;">DADR Service Orders</a>
                </li>

            </ul>
            <a href="{{ route('da-dr-increase-service') }}"><img src="https://www.buysellguestpost.com/assets/images/j.jpg" style="width: 100%;margin-top: 20px;margin-bottom: 20px;" alt=""></a> 

            <script>
                $(".sidebar-list .websites").addClass("active");
                $('.sidebar-list .websites').css("color:#0090BF;");
                $(".sidebar-list .dashboard,.sidebar-list .inbox,.sidebar-list .ordesidebar-list .earning").css('color', 'white');
            </script>

        </div>

        <div class="col-10">
            
            <div class="col-md-12 row">
            <div class="col-md-6">
            <div class="form-row">
            <label>Enter Amount For Deposit Funds</label>
            <input type="number" name="amount" placeholder="Amount (in US Dollars)" class="form-control" value="50">
            </div>
            <div class="form-row">
            <label>Select Method:</label>
            </div>
            <div class="form-row">
            <label style="margin-right:10px;" class="role-lable">
            <input type="radio" name="method" value="paypal"> <img height="30" src="https://www.buysellguestpost.com/imgs/paypal2.png">
            </label>
            <label class="role-lable">
            <input type="radio" name="method" value="payoneer" checked=""> <img height="30" src="https://www.buysellguestpost.com/imgs/payoneer.png">
            </label>
            </div>
            </div>
            <div class="col-md-6">
            <table class="table table-bordered">
            <tbody><tr>
            <td width="60%">
            Method
            </td>
            <td class="text-center" id="selectedM">payoneer</td>
            </tr>
            <tr>
            <td>
            Amount
            </td>
            <td class="text-center">
            <strong id="amountEntered">$50</strong>
            </td>
            </tr>
            <tr>
            <td>
            Processing Fee
            </td>
            <td class="text-center">
            <span id="fee">$0</span>
            </td>
            </tr>
            <tr class="bg-light">
            <td style="line-height:28px;">
            <strong>Sub Total</strong>
            </td>
            <td class="text-center org-color">
            <span style="font-size:20px;" id="totalAmount">$50</span>
            </td>
            </tr>
            </tbody></table>
            </div>
            <div class="col-md-12 text-center">
            <hr>
            <span class="btn btn-success" id="checkoutBtn">Proceed to Deposit</span>
            </div>
            </div>                    

        </div>

	</div>
</div>

@endsection('content')