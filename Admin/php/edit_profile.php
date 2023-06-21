<?
include '../../common/config.php';
extract($_POST);
$UpdateData = mysqli_query($conn,"UPDATE `admin` SET `name`='$name',`email`='$email', `password`='$password' WHERE `id`='$id'");
if ($UpdateData) {
	echo '<div class="alert alert-success"><strong>Well Done! </strong>Successfully Updated Profile</div>';
	echo '<script>setTimeout(function(){ window.location="timesheet.php"},3000)</script>';
}
else
{
	echo '<div class="alert alert-danger"><strong>!Failed </strong>Not be Updated</div>';
}
?>