<?php include'../../common/config.php';
extract($_POST);

	$DataUpdate = mysqli_query($conn,"UPDATE  `category` SET `name`='$name' WHERE id='$id'");
	if ($DataUpdate) {
		echo '<div class="alert alert-success"> Category Update Success..</div>';
		echo '<script> 
		var rereshId = window.setTimeout(function () { window.location.reload(); }, 80000);
		window.location="category.php";
		</script>';
	}
	else
	{
		echo '<div class="alert alert-danger"> Category Update Failed..</div>';
	}	

?>