<?php
	session_start();
	include  $_SERVER['DOCUMENT_ROOT']. "/database/dbconn.php";
	$userid 	= @$_POST['userid'];
	$userpw 	= @$_POST['userpw'];
	$name 		= @$_POST['name'];
	$gender		= @$_POST['gender'];
	$birthdate	= @$_POST['birthdate'];
	$tel 		= @$_POST['tel'];
	$address 	= @$_POST['address'];
	$email		= @$_POST['email'];
	
	// 비밀번호 암호화
	$userpw = md5($userpw);

	$sql = "INSERT INTO user(아이디, 비밀번호, 이름, 성별, 생년월일, 전화번호, 거주지 ,이메일주소)
	VALUES('$userid', '$userpw', '$name', '$gender', '$birthdate', '$tel', '$address', '$email')";
	$ret = mysqli_query($conn, $sql);

	echo "<script> window.location.href='../mainpage_normal.php'; </script> ";
?>

<?php
	
	$userid 	= @$_POST['userid'];
	
	$new_sql = "INSERT INTO detail(아이디)
	VALUES( '$userid')";
	$new_ret = mysqli_query($conn, $new_sql);
	
	echo "<script> window.location.href='../mainpage_normal.php'; </script> ";
?>