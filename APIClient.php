<?php

class APIClient
{
	
	function call($method, $url, $data = '', $auth = '')
	{
		$curl = curl_init($url);
		$adminUsername = 'admin';
		$adminPassword = 'admin';
		$adminHeaders = array(
		'Content-Type: application/json',
		'Authorization: Basic '. base64_encode("$adminUsername:$adminPassword"));
		
		curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
		
		switch ($method) {
			case "GET":
				curl_setopt($curl, CURLOPT_HTTPHEADER, $adminHeaders);
				curl_setopt($curl, CURLOPT_URL, $url);
				curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
				break;
			case "POST":
				curl_setopt($curl, CURLOPT_HTTPHEADER, $adminHeaders);
				curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
				curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
				break;
			case "PUT":
				curl_setopt($curl, CURLOPT_HTTPHEADER, $adminHeaders);
				curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
				curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
				break;				
			case "DELETE":
				curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
				curl_setopt($curl, CURLOPT_HTTPHEADER, $adminHeaders);
				curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
				break;
		}
		
		//Optional Authentification:
		if ($auth) {
			curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
			curl_setopt($curl, CURLOPT_USERPWD, $auth); //"username:password"
		}
		
		$response = curl_exec($curl);
		
		/* Check for 404 (file not found). */
		$httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
		
		// Check the HTTP Status code
		switch ($httpCode) {
			case 200:
				$error_status = 200;
				break;
			case 404:
				$error_status = 404;
				break;
			case 500:
				$error_status = 500;
				break;
			case 502:
				$error_status = 502;
				break;
			case 503:
				$error_status = 503;
				break;
			default:
				$error_status = 400;
				break;
		}
		curl_close($curl);
		
		return array (
		'response' => $response,
		'status' => $error_status
		);
	}
}

?>