<?

include('../../common/config.php');

$_POST=Sanitizer($_POST,$conn);


extract($_POST);
if (isset($id)) {
   
    $UpdateData = mysqli_query($conn,"UPDATE  `teacher` SET  `mobile`='$mobile', `name`='$name',`email`='$email',`password`='$password', `department`='$department' WHERE `id`='$id'");
	if ($UpdateData) {
		echo '<div class="alert alert-success">Teacher Update SuccesFully..</div>';
		echo '<script>window.location="teacher.php";setTimeout (function() {} , 3000);</script>';
	}
	else
	{
		echo '<div class="alert alert-danger">Data Not be Updated..</div>';
	}
}
else
{
    	$CheckEmail = mysqli_query($conn,"SELECT * FROM `teacher` WHERE `email`='$email'");
	if (mysqli_num_rows($CheckEmail)>0) {
		echo '<div class="alert alert-danger">Email Already Exist..</div>';
	}
	else
	{
	$added_on = strtotime("now");
	$InsertData = mysqli_query($conn,"INSERT INTO `teacher` SET  `mobile`='$mobile', `name`='$name',`email`='$email',`password`='$password', `department`='$department'");
	if ($InsertData) {
		echo '<div class="alert alert-success">teacher Added SuccesFully..</div>';
		echo '<script>window.location="teacher.php";setTimeout (function() {} , 3000);</script>';
	}
	else
	{
		echo '<div class="alert alert-danger">Data Not be Added..</div>';
	}
	}
	
	
	}

?>