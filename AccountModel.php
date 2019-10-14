<?php

require_once 'C:\wamp64\www\ArtDomain\APIClient.php';

class AccountModel {
	
	var $BASE_URL;
	var $apiClient;
	
	function __construct() {
		$this->BASE_URL = 'http://localhost:8080/account/';
		$this->apiClient = new APIClient();
	}
	
	function findall(){
		return $this->apiClient->call('GET', $this->BASE_URL.'getAll/all');
	}
	
	function find($id) {
		return $this->apiClient->call('GET', $this->BASE_URL.'find/'.$id);
	}
	
	function create($account = array()) {
		return $this->apiClient->call('POST', $this->BASE_URL.'create', $account);
}

	function update($account = array()) {
		return $this->apiClient->call('PUT', $this->BASE_URL.'update', $account);
}

	function delete($id) {
		return $this->apiClient->call('DELETE', $this->BASE_URL.'delete/'.$id);
	}
}
?>