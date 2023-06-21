<?php include('../common/config.php');



extract($_POST);
date_default_timezone_set('Asia/Kolkata');
$new_date =date('d-m-Y');

$time= date('H:i');


$CheckEmail = mysqli_query($conn,"SELECT * FROM `timesheet` WHERE `start_time`='$new_date' AND `userID`='$id' AND `type`='$type'");
	
$checkdata=mysqli_num_rows($CheckEmail);

 if($checkdata>0)
   {
	   echo '<div class="alert alert-danger">You already Punched</div>';
	   
   }
   
	else
	{
		$insertData = mysqli_query($conn,"INSERT INTO `timesheet` SET `userID`='$id', `type`='$type',`start_time`='$new_date',`tim_time`='$time'");
	if ($insertData) {
		echo '<div class="alert alert-success">Timesheet Data Uploaded Please Wait..</div>';
			echo '<script> setTimeout(function(){ window.location="add_timesheet.php"}, 3000);</script>';
	}
		
	}


?>

