<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Ryan Kolbe">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	 <style>
	body {
		background-image: url('background_image.png');
		background-repeat: no-repeat;
		background-size: cover;
		opacity: 0.70;
	}
	article{
	font-size: 32px;
	font-weight: bolder;
	color: pitch black;
	}
</style> 

</head>
<body>


	<?php
	require_once 'C:\wamp64\www\ArtDomain\accountModel.php';
	$accountModel = new accountModel();

	if(isset($_GET['accountId'])) {
		$accountModel->delete($_GET['accountId']);
	}

	$result = $accountModel->findAll();
	$accounts = (json_decode($result['response']));
	?>

	<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
	  <button class="w3-bar-item w3-button w3-large"
	  onclick="w3_close()">Close &times;</button>
	  <a href="accountIndex.php" class="w3-bar-item w3-button">Account</a>
	  <a href="#" class="w3-bar-item w3-button">Address</a>
	  <a href="#" class="w3-bar-item w3-button">Admin</a>
	  <a href="#" class="w3-bar-item w3-button">Art Course</a>
	  <a href="#" class="w3-bar-item w3-button">Art Stock</a>
	  <a href="#" class="w3-bar-item w3-button">Artist</a>
	  <a href="#" class="w3-bar-item w3-button">Asset</a>
	  <a href="#" class="w3-bar-item w3-button">Contact</a>
	  <a href="#" class="w3-bar-item w3-button">Courier</a>
	  <a href="#" class="w3-bar-item w3-button">Curator</a>
	  <a href="#" class="w3-bar-item w3-button">Customer</a>
	  <a href="#" class="w3-bar-item w3-button">Event</a>
	  <a href="#" class="w3-bar-item w3-button">Exhibition</a>
	  <a href="#" class="w3-bar-item w3-button">Gallery</a>
	  <a href="#" class="w3-bar-item w3-button">Job Role</a>
	  <a href="#" class="w3-bar-item w3-button">Locality</a>
	  <a href="#" class="w3-bar-item w3-button">Login</a>
	  <a href="#" class="w3-bar-item w3-button">Member</a>
	  <a href="#" class="w3-bar-item w3-button">Orders</a>
	  <a href="#" class="w3-bar-item w3-button">Packaging</a>
	  <a href="#" class="w3-bar-item w3-button">Painting</a>
	  <a href="#" class="w3-bar-item w3-button">Permission</a>
	  <a href="#" class="w3-bar-item w3-button">Returns</a>
	  <a href="#" class="w3-bar-item w3-button">Sculpture</a>
	  <a href="#" class="w3-bar-item w3-button">Services</a>
	</div>

	<div id="main">

		<div class="w3-teal">
		  <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
		  <div class="w3-container">
			<h1>Art Domain</h1>
		  </div>
	</div>
		

		<div class="w3-container">
		<article>
		The Art Domain project is a venture into enabling aspiring and up and coming artists with an
		inexpensive platform which can be utilized for promotional activity and artist demonstrations.
		<br>
		<hr>
		Artists utilizing the site are able to maintain all aspects of their profiles.
		<br>
		<hr>
		Caution: This site, along with the remainder of the project is still a work in progress.
		</article>
	
		</div>

	</div>

	<script>
		function w3_open() {
		  document.getElementById("main").style.marginLeft = "20%";
		  document.getElementById("mySidebar").style.width = "20%";
		  document.getElementById("mySidebar").style.display = "block";
		  document.getElementById("openNav").style.display = 'none';
		}
		function w3_close() {
		  document.getElementById("main").style.marginLeft = "0%";
		  document.getElementById("mySidebar").style.display = "none";
		  document.getElementById("openNav").style.display = "inline-block";
		}
	</script>
	</body>
</html>
