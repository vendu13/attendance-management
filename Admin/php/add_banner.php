<?php
include'../../common/config.php';
extract($_POST);
$imagedata = $_FILES['image']['name'];

$PathInfoGet = pathinfo($imagedata,PATHINFO_EXTENSION); 

$pathName = md5($imagedata).'.'.$PathInfoGet;

$InsertData=mysqli_query($conn,"INSERT INTO `banner` SET `name`='$name',`image`='$pathName'");

if ($InsertData) {

		move_uploaded_file($_FILES['image']['tmp_name'], "../../impimage/".$pathName);

		echo '<div class="alert alert-success"> Banner Added Success..</div>';
		echo '<script> 
		var rereshId = window.setTimeout(function () { window.location.reload(); }, 80000);
		window.location="banner.php";
		</script>';
	}

	else
	{
		echo '<div class="alert alert-danger"> Banner Added Failed..</div>';
	}		
?>