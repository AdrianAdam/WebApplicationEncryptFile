<?php
	session_start();
	session_destroy();
	
	$date=date('d-m-y | h:i:s');
	
	setcookie("date", $date, time()+3600);
	header("Location: login.php");
?>