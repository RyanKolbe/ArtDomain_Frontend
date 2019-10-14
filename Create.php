<?php
require_once 'C:\wamp64\www\ArtDomain\AccountModel.php';
$accountModel = new AccountModel();
if(isset($_POST["buttonSave"])){
	$accountModel->create($_POST);
	header('Location:Index.php');
}
?>
<h3>Create Account</h3>
<form method="post">
	<table>
		<tr>
			<td>Account Id</td>
			<td><input type="text" name="accountId" required="required"/></td>
		</tr>
		<tr>
			<td>Account Number</td>
			<td><input type="text" name="accountNumber" required="required"/></td>
		</tr>
		<tr>
			<td>Account Name</td>
			<td><input type="text" name="accountName" required="required"/></td>
		</tr>
		<tr>
			<td>Account Category</td>
			<td><input type="text" name="accountCategory" required="required"/></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="buttonSave" value="Save"/></td>
	</table>
</form>