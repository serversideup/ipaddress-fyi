<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\IPAddress;

class IPController extends Controller
{
	public function postGenerateURL( Request $request ){
		$appsRequest = implode('-',	$request->get('service') );

		return redirect('/'.$appsRequest);
	}

    public function getJSONIPs( $selection, Request $request ){
    	$apps = $selection;
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

    public function getIPs( $selection, Request $request ){
        $apps = $selection;
        $apps = explode('-', $apps);

        $returnedAddresses = array();

        foreach( $apps as $app ){
            $appAddress = IPAddress::where( 'app_name', '=', $app )->first();

            if( $appAddress != null ){
                if( !isset( $returnedAddresses[ $app ] ) ){
                    $returnedAddresses[ $app ] = array();
                }
                $returnedAddresses[ $app ]['ips']           = json_decode( $appAddress->addresses );
                $returnedAddresses[ $app ]['app_name']      = $appAddress->app_name;
                $returnedAddresses[ $app ]['clean_name']    = $appAddress->clean_name;
                $returnedAddresses[ $app ]['last_updated']  = $appAddress->last_updated;
                $returnedAddresses[ $app ]['source']        = $appAddress->source;
            }
        }

        return view('ip')
                    ->with('selection', $selection)
                    ->with('returnedAddresses', $returnedAddresses);
    }
}
