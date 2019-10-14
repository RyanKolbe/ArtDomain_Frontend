<?php
require_once 'C:\wamp64\www\ArtDomain\AccountModel.php';
$accountModel = new AccountModel();

if(isset($_GET['accountId'])) {
	$accountModel->delete($_GET[accountId]);
}
$result = $accountModel->findAll();
$accounts = (json_decode($result['response']));
?>
<h3>Account List</h3>
<a href="Create.php">Create Account</a>
<table border="1">
	<tr>
		<th>Account Id</th>
		<th>Account Number</th>
		<th>Account Name</th>
		<th>Account Category</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php foreach ($accounts as $account) { ?>
		<tr>
			<td><?php echo $account->accountId; ?></td>
			<td><?php echo $account->accountNumber; ?></td>
			<td><?php echo $account->accountName; ?></td>
			<td><?php echo $account->accountCategory; ?></td>
			<td>Edit</d>
			<td><a href="Index.php?id<?php echo $account->accountId; ?> onclick="return confirm('Are you sure')">Delete</td>
			
		</tr>
	<?php }?>
</table>