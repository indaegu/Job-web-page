<?php
	include  $_SERVER['DOCUMENT_ROOT']. "/database/dbconn.php";
	$id 	= @$_GET['아이디'];
	$grade 	= @$_POST['grade'];
	$school = @$_POST['school'];

	$sql = mq("UPDATE detail SET 학점 = '$grade', 학교 = '$school' WHERE 아이디='$id'");

	echo "<script> window.location.href='../mainpage_normal.php'; </script> "; 
?>