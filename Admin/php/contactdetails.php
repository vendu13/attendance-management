<?php include'../../common/config.php';
/*print_r($_POST);*/
extract($_POST);

$DataInsert = mysqli_query($conn,"UPDATE `contact` SET `copyright`='$copyright',`email`='$email',`facebook`='$facebook',`twitter`='$twitter',`instagram`='$instagram',`linkedin`='$linkedin',`youtube`='$youtube' where id='1'");


	if ($DataInsert) {
		echo '<div class="alert alert-success"> Contact Details Added Success..</div>';
		echo '<script> 
		var rereshId = window.setTimeout(function () { window.location.reload(); }, 80000);
		window.location="contactdetails.php";
		</script>';
	}

	else
	{
		echo '<div class="alert alert-danger">  Added Failed..</div>';
	}


?>