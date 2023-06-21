<?
include('../../common/config.php');
$_POST=Sanitizer($_POST,$conn);
	extract($_POST);
if (!isset($id)) {
	
	$CheckEmail = mysqli_query($conn,"SELECT * FROM `user` WHERE `email`='$email'");
	if (mysqli_num_rows($CheckEmail)>0) {
		echo '<div class="alert alert-danger">Email Already Exist..</div>';
	}
	else
	{
	$added_on = strtotime("now");
	$InsertData = mysqli_query($conn,"INSERT INTO `user` SET `name`='$name',`email`='$email',`password`='$password', `added_on`='$added_on'");
	if ($InsertData) {
		echo '<div class="alert alert-success">User Added SuccesFully..</div>';
		echo '<script>window.location="user.php";setTimeout (function() {} , 3000);</script>';
	}
	else
	{
		echo '<div class="alert alert-danger">Data Not be Added..</div>';
	}
	}
}
else
{
	$CheckEmail = mysqli_query($conn,"SELECT * FROM `user` WHERE `email`='$email' AND `id`!='$id'");
	if (mysqli_num_rows($CheckEmail)>0) {
		echo '<div class="alert alert-danger">Email Already Exist..</div>';
	}
	else
	{	
	$UpdateData = mysqli_query($conn,"UPDATE  `user` SET `name`='$name',`email`='$email',`password`='$password' WHERE `id`='$id'");
	if ($UpdateData) {
		echo '<div class="alert alert-success">User Update SuccesFully..</div>';
		echo '<script>window.location="user.php";setTimeout (function() {} , 3000);</script>';
	}
	else
	{
		echo '<div class="alert alert-danger">Data Not be Updated..</div>';
	}
	}
}
?>