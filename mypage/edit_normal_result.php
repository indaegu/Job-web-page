<?php
	include  $_SERVER['DOCUMENT_ROOT']. "/database/dbconn.php";
	$userid 	= @$_GET['userid'];
	$userpw 	= @$_POST['userpw'];
	$name 		= @$_POST['name'];
	$gender		= @$_POST['gender'];
	$birthdate	= @$_POST['birthdate'];
	$tel 		= @$_POST['tel'];
	$address 	= @$_POST['address'];
	$email		= @$_POST['email'];
	
	// 비밀번호 암호화
	$userpw = md5($userpw);

	$sql = "UPDATE user
	SET 비밀번호 = '$userpw', 이름 = '$name', 성별 = '$gender',
	생년월일 = '$birthdate', 전화번호 = '$tel', 거주지 = '$address', 
	이메일주소 = '$email' WHERE 아이디 = '$userid'";

	$ret = mysqli_query($conn, $sql);

	echo "<script>alert('수정되었습니다.')</script>";

?>

echo "<script> window.location.href='../mainpage_normal.php'; </script> ";


