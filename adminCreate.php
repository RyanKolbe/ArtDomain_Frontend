<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Ryan Kolbe">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	 <style>
	article{
	font-size: 32px;
	font-weight: bolder;
	color: pitch black;
	}
	a{
		color: blue;
	}
	table, h3, a.create_button {
		position: relative;
		left: 30px;
</style> 

</head>
<body>
<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
	  <button class="w3-bar-item w3-button w3-large"
	  onclick="w3_close()">Close &times;</button>
	  <a href="accountIndex.php" class="w3-bar-item w3-button">Account</a>
	  <a href="addressIndex.php" class="w3-bar-item w3-button">Address</a>
	  <a href="adminIndex.php" class="w3-bar-item w3-button">Admin</a>
	  <a href="artCourseIndex.php" class="w3-bar-item w3-button">Art Course</a>
	  <a href="artStockIndex.php" class="w3-bar-item w3-button">Art Stock</a>
	  <a href="artistIndex.php" class="w3-bar-item w3-button">Artist</a>
	  <a href="assetIndex.php" class="w3-bar-item w3-button">Asset</a>
	  <a href="contactIndex.php" class="w3-bar-item w3-button">Contact</a>
	  <a href="courierIndex.php" class="w3-bar-item w3-button">Courier</a>
	  <a href="curatorIndex.php" class="w3-bar-item w3-button">Curator</a>
	  <a href="customerIndex.php" class="w3-bar-item w3-button">Customer</a>
	  <a href="eventIndex.php" class="w3-bar-item w3-button">Event</a>
	  <a href="exhibitionIndex.php" class="w3-bar-item w3-button">Exhibition</a>
	  <a href="galleryIndex.php" class="w3-bar-item w3-button">Gallery</a>
	  <a href="jobRoleIndex.php" class="w3-bar-item w3-button">Job Role</a>
	  <a href="localityIndex.php" class="w3-bar-item w3-button">Locality</a>
	  <a href="loginIndex.php" class="w3-bar-item w3-button">Login</a>
	  <a href="memberIndex.php" class="w3-bar-item w3-button">Member</a>
	  <a href="ordersIndex.php" class="w3-bar-item w3-button">Orders</a>
	  <a href="packagingIndex.php" class="w3-bar-item w3-button">Packaging</a>
	  <a href="paintingIndex.php" class="w3-bar-item w3-button">Painting</a>
	  <a href="permissionIndex.php" class="w3-bar-item w3-button">Permission</a>
	  <a href="returnsIndex.php" class="w3-bar-item w3-button">Returns</a>
	  <a href="sculptureIndex.php" class="w3-bar-item w3-button">Sculpture</a>
	  <a href="servicesIndex.php" class="w3-bar-item w3-button">Services</a>
	</div>

	<div id="main">

		<div class="w3-teal">
		  <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
		  <div class="w3-container">
			<h1>Art Domain</h1>
		  </div>
		  
	</div>
<?php
require_once 'C:\wamp64\www\ArtDomain\adminModel.php';
$adminModel = new AdminModel();
if(isset($_POST["saveButton"])){
	$adminModel->create($_POST);
	header('Location:adminIndex.php');
}
?>
<h3>Create Admin</h3>
<form method="post">
	<table>
		<tr>
			<td>Admin Id</td>
			<td><input type="number" name="adminId" required="required" autocomplete="off" /></td>
		</tr>
		<tr>
			<td>Admin Login</td>
			<td><input type="text" name="adminLogin" required="required" autocomplete="off"/></td>
		</tr>
		<tr>
			<td>Admin Password</td>
			<td><input type="text" name="adminPassword" required="required" autocomplete="off"/></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="saveButton" value="Save"/></td>
	</table>
</form>
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
