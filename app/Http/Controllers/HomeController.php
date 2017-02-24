<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\IPAddress;

class HomeController extends Controller
{
    public function getHome(){
    	$ipAddresses = IPAddress::all();

    	$categories = array();

    	foreach( $ipAddresses as $ipAddress ){
    		if( !isset( $categories[ $ipAddress->category ] ) ){
    			$categories[ $ipAddress->category ] = array();
    		}

    		array_push( $categories[ $ipAddress->category ], $ipAddress );
    	}

    	return view('home')
    			->with('categories', $categories);
    }
}
