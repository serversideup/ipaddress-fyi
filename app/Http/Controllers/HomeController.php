<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\IPAddress;

class HomeController extends Controller
{
    public function getHome(){
    	$ipAddresses = IPAddress::all();

    	return view('home')
    				->with('ipAddresses', $ipAddresses);
    }
}
