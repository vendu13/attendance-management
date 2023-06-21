<?
session_start();
session_destroy();
echo '<script>alert("Logout Succesfully..")</script>';
echo '<script> window.location="../Admin/login.php";setTimeout(function(){}, 3000);</script>';
?>