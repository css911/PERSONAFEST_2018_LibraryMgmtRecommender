<?php
	session_start();
  if(isset($_SESSION['user_id'])==false)
  {

	header("location:login.php");
}
?>
