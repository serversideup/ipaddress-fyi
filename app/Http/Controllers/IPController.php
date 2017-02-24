<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\IPAddress;

class IPController extends Controller
{
	public function postGenerateURL( Request $request ){
		$appsRequest = implode('-',	$request->get('service') );

		return redirect('/addresses?apps='.$appsRequest);
	}

    public function getIPs( Request $request ){
    	$apps = $request->get('apps');
    	$apps = explode('-', $apps);

    	$returnedAddresses = array();

    	foreach( $apps as $app ){
    		$appAddress = IPAddress::where( 'app_name', '=', $app )->first();

    		if( $appAddress != null ){
    			$returnedAddresses[ $app ] = json_decode( $appAddress->addresses );
    		}
    	}

    	return response()->json( $returnedAddresses );
    }
}
