<?php

require_once 'C:\wamp64\www\ArtDomain\APIClient.php';

class adminModel {
	
	var $BASE_URL;
	var $apiClient;
	
	function __construct() {
		$this->BASE_URL = 'http://localhost:8080/admin/';
		$this->apiClient = new APIClient();
	}
	
	function findall(){
		return $this->apiClient->call('GET', $this->BASE_URL.'getAll/all');
	}
	
	function find($id) {
		return $this->apiClient->call('GET', $this->BASE_URL.'read/'.$id);
	}
	
	function create($admin = array()) {
		return $this->apiClient->call('POST', $this->BASE_URL.'create', $admin);
}

	function update($admin = array()) {
		return $this->apiClient->call('PUT', $this->BASE_URL.'update', $admin);
}

	function delete($id) {
		return $this->apiClient->call('DELETE', $this->BASE_URL.'delete/'.$id);
	}
}
?>