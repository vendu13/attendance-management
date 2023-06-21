<?php include('../common/config.php');
//print_r($_POST);

// $connection = new Database();
// $conn=$connection->connect();
extract($_POST);


if ($type==0) {
	$SelectData = mysqli_query($conn,"SELECT * FROM `student` WHERE `email`='$email' AND `password`='$password'");

		if(mysqli_num_rows($SelectData)>0) {

			$FetchData = mysqli_fetch_assoc($SelectData);
			$_SESSION['name']=$FetchData['name'];
			$_SESSION['id']=$FetchData['id'];
			$_SESSION['class']=$FetchData['class'];
			$_SESSION['section']=$FetchData['section'];
			$_SESSION['section']=$email;
			$_SESSION['type']=$type;
			echo '<div class="alert alert-success">Login SuccessFully Please Wait..</div>';
			echo '<script> window.location="../add_timesheet.php";setTimeout(function(){}, 3000);</script>';
			

		}
		else
		{
			echo '<div class="alert alert-danger">Please Enter Valid Information..</div>';
			echo '<script>setTimeout(function(){}, 3000);</script>';
		}
		}
		else if($type==1){
	$SelectData = mysqli_query($conn,"SELECT * FROM `teacher` WHERE `email`='$email' AND `password`='$password'");

		if(mysqli_num_rows($SelectData)>0) {

			$FetchData = mysqli_fetch_assoc($SelectData);
			$_SESSION['name']=$FetchData['name'];
			$_SESSION['id']=$FetchData['id'];
			$_SESSION['department']=$FetchData['department'];
			$_SESSION['section']=$email;
			$_SESSION['type']=$type;
			echo '<div class="alert alert-success">Login SuccessFully Please Wait..</div>';
			echo '<script> window.location="../add_timesheet.php";setTimeout(function(){}, 3000);</script>';
			

		}
		else
		{
			echo '<div class="alert alert-danger">Please Enter Valid Information..</div>';
			echo '<script>setTimeout(function(){}, 3000);</script>';
		}
		}
else
		{
			$SelectData = mysqli_query($conn,"SELECT * FROM `admin` WHERE `email`='$email' AND `password`='$password'");

		if(mysqli_num_rows($SelectData)>0) {

			$FetchData = mysqli_fetch_assoc($SelectData);
			$_SESSION['userName']=$FetchData['name'];
			$_SESSION['loginadmin']=$FetchData['id'];
			
			$_SESSION['email']=$FetchData['email'];
			$_SESSION['type']=$type;
			echo '<div class="alert alert-success">Login SuccessFully Please Wait..</div>';
			echo '<script> window.location="../Admin/timesheet.php";setTimeout(function(){}, 3000);</script>';
			
		}
		else
		{
			echo '<div class="alert alert-danger">Please Enter Valid Information..</div>';
			echo '<script>setTimeout(function(){}, 3000);</script>';
		}
		}
?>