<?php include'../../common/config.php';
/*print_r($_POST);*/
extract($_POST);

$DataInsert = mysqli_query($conn,"INSERT INTO `department` SET `name`='$name'");
	if ($DataInsert) {
		echo '<div class="alert alert-success"> Department Added Success..</div>';
		echo '<script> 
		var rereshId = window.setTimeout(function () { window.location.reload(); }, 80000);
		window.location="add_department.php";
		</script>';
	}

	else
	{
		echo '<div class="alert alert-danger"> class Added Failed..</div>';
	}


?>