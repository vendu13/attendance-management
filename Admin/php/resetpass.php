<?php
include '../../common/config.php';
extract($_REQUEST);

$SelectPassword = mysqli_query($conn,"SELECT * FROM `signup` WHERE `auth_id`='$id'");						
if (mysqli_num_rows($SelectPassword)>0) {
		
		if ($password!=$cpassword) {
			$DataGet = mysqli_fetch_assoc($SelectPassword);
			$uID =$DataGet['id'];					
			echo '<div class="alert alert-danger">Password And Confirm Password Not be Macth</div>';
										
			}
			else
			{
					$UpdatePass = mysqli_query($conn,"UPDATE `signup` SET `password`='$password' WHERE id='$uID'");

					if ($UpdatePass) {
						
						echo '<div class="alert alert-success">Password Change Done..</div>';
					}
					else
					{
						echo '<div class="alert alert-danger">Failed..</div>';
					}
			}
}
else
{
echo '<div class="alert alert-danger">You Have Not Autherised Person</div>';
}
						

?>