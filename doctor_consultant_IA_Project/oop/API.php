<?php 
ini_set('display_errors', 1);
/**
 * 
 */
class API{
	
	function __construct()
	{
		# code...
	}

	function CallAPI($url){
	    $curl = curl_init();

	    curl_setopt_array($curl, array(
	        CURLOPT_RETURNTRANSFER => 1,
	        CURLOPT_URL => $url
	    ));

	    $result =  curl_exec($curl);
	    curl_close($curl);
	    return $result;
	}

}

 ?>