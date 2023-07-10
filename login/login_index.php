<?php
	session_start();
	if(!isset($_SESSION['username'])) {
		echo "<script>location.replace('/database/mainpage_normal.php');</script>";            
	}

	else {
		$username = $_SESSION['username'];
		echo "<script>location.replace('/database/mainpage_normal.php');</script>";
	} 
?>
