@extends('layouts.app')

@section('page-title', "Advertiser Dashboard")

@section('custom_css')

<link rel="stylesheet" href="{{ asset('css/btcustom.css') }}">

<link rel="stylesheet" href="{{ asset('css/websiteadd.css') }}">

<link rel="stylesheet" href="{{ asset('css/advertiser.css') }}">

<link rel="stylesheet" href="{{ asset('css/orders.css') }}">

@endsection('custom_css')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-12 mt-4">
            <livewire:heading2 site="advertiser" currentlySite="Service Orders" />
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
                    <a href="{{ route('advertiser.deposit') }}" class="dashboard" style="color: white;">+ Deposit Funds</a>
                </li>

                <hr style="background-color: white;">

                <li>
                    <a href="{{ route('advertiser.index') }}" class="orders " style="color: white;">Dashboard</a>
                </li>

                <li>
                    <a href="{{ route('advertiser.orders') }}" class="orders" style="color: white;" >Orders</a>
                </li>

                <li>
                    <a href="{{ route('advertiser.serviceo') }}" class="orders dashboard" style="color: #0090bf; background: #eff1f1; font-weight: 500;">Service Orders</a>
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

        <div class="col-md-10" style="padding: 0 0 0 40px">
        	<div class="col-md-12">
        		<a onClick="changeActive('Active')" id="Active" class="btn-filtro-orders Active">Pending</a>
        		<a onClick="changeActive('Delivered')" id="Delivered"  class="btn-filtro-orders">In Process</a>
        		<a onClick="changeActive('Complete')" id="Complete"  class="btn-filtro-orders">Completed</a>
        	</div>
        	<br>

        	<div class="col-md-12">
        		
            <table class="table properties-table list-table">
                <tbody>
                    <tr>
                        
                        <th class="my-top-bar" colspan="6">
                            Guest Post Service Orders
                        </th>
                        <th class="my-top-bar"></th>
                    </tr>
                    <tr class="text-muted text-uppercase">
                        <th width="12%">TRANS ID</th>
                        <th width="10%">SERVICE PLAN</th>
                        <th width="13%">PRICE</th>
                        <th width="10%">WEBSIE</th>
                        <th width="10%">KEYWORDS</th>
                        <th width="10%">STATUS</th>
                        <th width="10%">DATE</th>
                    </tr>
                </tbody>
                <tbody>
                    
                </tbody>
                <tfoot>
                    <tr>
                        <td class="text-center" colspan="6">
                            <a href="#" class="btn-advertiser" style="color: #0068a3; border: 1px solid #ccc; font-weight: 400; padding: .5rem .75rem; font-size: 1rem; line-height: 1.25; border-radius: .25rem;">
                                Load More
                            </a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        		
        	</div>

        </div>

	</div>
</div>

@endsection('content')

<script>

    function changeActive(id){

        console.log('ChangeActive');

        switch (id) {
            case 'Active':

                document.getElementById("Delivered").classList.remove("Active");
                document.getElementById("Complete").classList.remove("Active");
                document.getElementById("Active").classList.add("Active");
                
                break;
            case 'Delivered':
                
                document.getElementById("Complete").classList.remove("Active");
                document.getElementById("Active").classList.remove("Active");
                document.getElementById("Delivered").classList.add("Active");


                break;
            case 'Complete':
                
                document.getElementById("Active").classList.remove("Active");
                document.getElementById("Delivered").classList.remove("Active");
                document.getElementById("Complete").classList.add("Active");

                break;
            
            default:
                break;
        }
    }

</script>