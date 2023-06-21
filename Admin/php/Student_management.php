<?

include('../../common/config.php');

$_POST=Sanitizer($_POST,$conn);


extract($_POST);
if (isset($id)) {
   
    $UpdateData = mysqli_query($conn,"UPDATE  `student` SET  `mobile`='$mobile', `name`='$name',`email`='$email',`password`='$password', `class`='$class',`section`='$section' WHERE `id`='$id'");
	if ($UpdateData) {
		echo '<div class="alert alert-success">student Update SuccesFully..</div>';
		echo '<script>window.location="user.php";setTimeout (function() {} , 3000);</script>';
	}
	else
	{
		echo '<div class="alert alert-danger">Data Not be Updated..</div>';
	}
}
else
{
    	$CheckEmail = mysqli_query($conn,"SELECT * FROM `student` WHERE `email`='$email'");
	if (mysqli_num_rows($CheckEmail)>0) {
		echo '<div class="alert alert-danger">Email Already Exist..</div>';
	}
	else
	{
	$added_on = strtotime("now");
	$InsertData = mysqli_query($conn,"INSERT INTO `student` SET  `mobile`='$mobile', `name`='$name',`email`='$email',`password`='$password', `class`='$class',`section`='$section'");
	if ($InsertData) {
		echo '<div class="alert alert-success">student Added SuccesFully..</div>';
		echo '<script>window.location="user.php";setTimeout (function() {} , 3000);</script>';
	}
	else
	{
		echo '<div class="alert alert-danger">Data Not be Added..</div>';
	}
	}
	
	
	}

?>