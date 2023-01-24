<?php
	function get_url($url) {

		$client = curl_init($url);
		curl_setopt($client,CURLOPT_SSL_VERIFYHOST,0);
		curl_setopt($client,CURLOPT_SSL_VERIFYPEER,0);
		curl_setopt($client,CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($client);
		return json_decode($response);
		
	}
	$url_glob = "https://data.covid19.go.id/public/api/prov.json";
	$result=get_url($url_glob);
	// var_dump($result);
?>