<?php
	session_start();
	if(!isset($_SESSION['username'])) {
		echo "<script>location.replace('/database/mainpage_company.php');</script>";            
	}

	else {
		$username = $_SESSION['username'];
		echo "<script>location.replace('/database/mainpage_company.php');</script>";
	} 
?>
