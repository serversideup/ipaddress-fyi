<?php
namespace App\Utilities;

use App\IPAddress;

class IPSource
{
	public static function updateAllSources(){
		$directory = base_path().'/public/sources/';

		$files = scandir( $directory );

		foreach( $files as $file ){
			if( $file != '.' && $file != '..' ){
				self::updateSource( basename( $file, '.json') );
			}
		}
	}

	public static function updateSource( $app ){
		$jsonString 	= file_get_contents( base_path().'/public/sources/'.$app.'.json' );
		
		$json 			= json_decode( $jsonString, true );

		if( !empty( $json ) ){
			$ipAddressRecord 	= IPAddress::firstOrNew([
				'app_name' => $app
			]);

			if( isset( $json['addresses'] ) ){
				$ipAddressRecord->addresses 	= json_encode( $json['addresses'] );
				$ipAddressRecord->source 		= $json['source'];
				$ipAddressRecord->last_updated 	= date( 'Y-m-d H:i:s', time() );

				$ipAddressRecord->save();
			}else{
				$ipArray = array();

				foreach( $json['commands'] as $command ){
					exec( $command, $ipAddresses );

					foreach( $ipAddresses as $ipAddress ){
						$cleanIP = str_replace( 'route6:', '', $ipAddress );
						$cleanIP = str_replace( 'route:', '', $cleanIP );
						$cleanIP = trim( $cleanIP );

						array_push( $ipArray, $cleanIP );
					}
				}
				
				$ipAddressRecord->addresses 	= json_encode( $ipArray );
				$ipAddressRecord->source 		= $json['source'];
				$ipAddressRecord->last_updated 	= date( 'Y-m-d H:i:s', time() );

				$ipAddressRecord->save();
			}
		}
	}
}