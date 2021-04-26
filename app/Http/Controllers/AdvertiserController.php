<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvertiserController extends Controller
{
    public function index() {
    	return view('advertiser.index');
    }

    public function orders()
    {
        return view('advertiser.orders');
    }

    public function serviceOrder()
    {
        return view('advertiser.service-order');
    }

    function goDADR()
    {
        return view('advertiser.dadr');
    }

    public function goDeposit()
    {
        return view('advertiser.deposit');
    }
}
