<?php
include'../../common/config.php';

	function __construct($conn)
	{
		$this->conn = $conn;
	}

	function SuccessMessage($message,$class,$location,$time=2000)
	{
		echo '<div class="alert alert-'.$class.'"  style="">
						  <button type="button" class="close" data-dismiss="alsert" style="margin-left: 5px">  x  </button>
						  <strong >'.$message.'</strong></div>';

						  echo "<script>setTimeout(()=>{location.href='".$location."';},2000)</script>";
	}
?>
<script type=""></script>