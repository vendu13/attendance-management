<?php include '../../common/config.php';
if (isset($_GET['delete'])) {
	$DeleteData = mysqli_query($conn,"DELETE FROM `signup` WHERE `id`='".$_GET['delete']."'");
	echo '<script>alert("Deleted SuccessFully..");</script>';
}
?>