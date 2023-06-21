<?php include'../../common/config.php';
/*print_r($_POST);*/
extract($_POST);

$DataInsert = mysqli_query($conn,"INSERT INTO `category` SET `name`='$name'");
	if ($DataInsert) {
		echo '<div class="alert alert-success"> Category Added Success..</div>';
		echo '<script> 
		var rereshId = window.setTimeout(function () { window.location.reload(); }, 80000);
		window.location="category.php";
		</script>';
	}

	else
	{
		echo '<div class="alert alert-danger"> Category Added Failed..</div>';
	}


?>