<?php include 'functions.php';

				extract($_POST);
				//print_r($_POST);
				$CheckData = array("email"=>$email,"password"=>$password);
				$ArrayCheck = array_search(null,$CheckData);

				if ($ArrayCheck) {
				
						SuccessMessage("Please Enter Any Data","danger","");
						  die;
					
				} 
				else 
				{
					$SelectData = mysqli_query($conn,"SELECT * FROM `admin` WHERE `email`='$email' AND `password`='$password' ");
					
					
					if($DataGet = mysqli_fetch_assoc($SelectData)) {

						//$DataGet = mysqli_fetch_assoc($SelectData);
						$_SESSION['loginID']=$DataGet['id'];
						$_SESSION['loginType']=$DataGet['type'];
						$_SESSION['loginName']=$DataGet['name'];
						$_SESSION['loginImage']=$DataGet['image'];
						$LoginTime = strtotime("now");

						$Lastlogin = mysqli_query($conn,"UPDATE `signup` SET `last_login`='$LoginTime' WHERE `id`='".$DataGet['id']."'");
						
						SuccessMessage("Login SuccessFully...","success","index.php");

						}

					else {
						
						 SuccessMessage("You have Wrong Information EnterS","danger","");
						}
				}

?>