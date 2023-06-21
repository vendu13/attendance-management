<?php
include'../../common/config.php';
extract($_POST);

				// "name"=>$name,
				// "phone"=>$phone,

          $added_on = strtotime("now");
          $CheckEmail = mysqli_query($conn,"SELECT * FROM `signup` WHERE `email`='$email' ");
          $CheckUserName = mysqli_query($conn,"SELECT * FROM `signup` WHERE `user_name`='$user_name' ");
            if ($DataCount = mysqli_num_rows($CheckEmail)>0) {
              
               echo '<div class="alert alert-danger">This Email Already Exist here..</div>';
            }
              
            elseif ($DataCount1 = mysqli_num_rows($CheckUserName)>0) {
              
              echo '<div class="alert alert-danger">This User Name  Already Exist here..</div>';
            }

          else
          {
            $InsertData = mysqli_query($conn,"INSERT INTO `signup` SET `name`='$name', `email`='$email',`password`='$password',`type`='$type',`user_name`='$user_name' , `added_on`='$added_on'");

                if ($InsertData) {
                    echo '<div class="alert alert-success">Vendor Added Success..</div>';
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