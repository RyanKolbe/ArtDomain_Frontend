<?php

require_once 'C:\wamp64\www\ArtDomain\APIClient.php';

class addressModel {
	
	var $BASE_URL;
	var $apiClient;
	
	function __construct() {
		$this->BASE_URL = 'http://localhost:8080/address/';
		$this->apiClient = new APIClient();
	}
	
	function findall(){
		return $this->apiClient->call('GET', $this->BASE_URL.'getAll/all');
	}
	
	function find($id) {
		return $this->apiClient->call('GET', $this->BASE_URL.'read/'.$id);
	}
	
	function create($address = array()) {
		return $this->apiClient->call('POST', $this->BASE_URL.'create', $address);
}

	function update($address = array()) {
		return $this->apiClient->call('PUT', $this->BASE_URL.'update', $address);
}

	function delete($id) {
		return $this->apiClient->call('DELETE', $this->BASE_URL.'delete/'.$id);
	}
}
?>