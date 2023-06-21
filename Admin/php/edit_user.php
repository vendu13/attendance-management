<?php
include'../../common/config.php';
extract($_POST);

			$CheckEmail = mysqli_query($conn,"SELECT * FROM `signup` WHERE `email`='$email' AND id!='$id'");
          	$CheckUserName = mysqli_query($conn,"SELECT * FROM `signup` WHERE `user_name`='$user_name' AND id!='$id' ");
            if ($DataCount = mysqli_num_rows($CheckEmail)>0) {
              
               echo '<div class="alert alert-danger">This Email Already Exist here..</div>';
            }
              
            elseif ($DataCount1 = mysqli_num_rows($CheckUserName)>0) {
              
              echo '<div class="alert alert-danger">This User Name  Already Exist here..</div>';
            }
			else
			{
				$InsertData = mysqli_query($conn,"UPDATE  `signup` SET `name`='$name', `email`='$email',`password`='$password',`type`='$user_type',`user_name`='$user_name' WHERE id='$id'");
				
				if ($InsertData) {
					echo '<div class="alert alert-success">User Update Success..</div>';
					echo '<script> 
					var rereshId = window.setTimeout(function () { window.location.reload(); }, 80000);
					window.location="user.php";
					</script>';
							}						
				else
				{
					echo '<div class="alert alert-danger">Failed..</div>';
				}
			}
					
?>