<?php
namespace App\Utilities;

use App\IPAddress;

class IPSource
{
	/**
     * Updates all of the sources for IP Addresses
     *
     * @return bool
     */
	public static function updateAllSources(){
		/*
			Defines the directory where all the source files are housed
		*/
		$directory = base_path().'/public/services/';

		/*
			Scans the directory we defined for source json files.
		*/
		$files = scandir( $directory );

		/*
			Iterates over all of the files and updates the source.
		*/
		foreach( $files as $file ){
			if( $file != '.' && $file != '..' ){
				self::updateSource( basename( $file, '.json') );
			}
		}

		/*
			Returns true when completed
		*/
		return true;
	}

	/**
     * Updates a source file
     *
     * @param 	$app 	The app we are getting the IP Addresses updated for.
     * @return bool
     */
	public static function updateSource( $app ){
		/*
			Reads in the JSON string from the file.
		*/
		$jsonString = file_get_contents( base_path().'/public/services/'.$app.'.json' );

		/*
			Decodes the file as JSON
		*/
		$json = json_decode( $jsonString, true );

		/*
			If the JSON is not empty, we continue
		*/
		if( !empty( $json ) ){
			/*
				Gets the first or new IPAddress record based off of the
				app name.
			*/
			$ipAddressRecord 	= IPAddress::firstOrNew([
				'app_name' => $app
			]);

			/*
				If the JSON has addresses, we just use those and don't call
				any script to get the ip addresses.
			*/
			if( isset( $json['addresses'] ) ){
				$ipAddressRecord->clean_name 	= $json['name'];
				$ipAddressRecord->addresses 	= json_encode( $json['addresses'] );
				$ipAddressRecord->source 		= $json['source'];
				$ipAddressRecord->category 		= $json['category'];
				$ipAddressRecord->last_updated 	= date( 'Y-m-d H:i:s', time() );

				$ipAddressRecord->save();
			}else{
				/*
					Initialize the ipArray
				*/
				$ipArray = array();

				/*
					Iterate over all of the commands to retrieve the IP addresses
				*/
				foreach( $json['commands'] as $command ){
					/*
						Execute the command to get the ipAddresses
					*/
					exec( $command, $ipAddresses );

					/*
						Clean up the ipaddresses and build clean ip addresses
					*/
					foreach( $ipAddresses as $ipAddress ){
						$cleanIP = str_replace( 'route6:', '', $ipAddress );
						$cleanIP = str_replace( 'route:', '', $cleanIP );
						$cleanIP = trim( $cleanIP );

						array_push( $ipArray, $cleanIP );
					}
				}

				/*
					Save the addresses, source and last_updated
				*/
				$ipAddressRecord->clean_name 	= $json['name'];
				$ipAddressRecord->addresses 	= json_encode( $ipArray );
				$ipAddressRecord->source 		= $json['source'];
				$ipAddressRecord->category 		= $json['category'];
				$ipAddressRecord->last_updated 	= date( 'Y-m-d H:i:s', time() );

				$ipAddressRecord->save();
			}
		}

		return true;
	}
}
