<?php
	include  $_SERVER['DOCUMENT_ROOT']. "/database/dbconn.php";
	$company_id 		= @$_POST['company_id'];
	$compnay_pw 		= @$_POST['company_pw'];
	$company_name 		= @$_POST['company_name'];
	$company_tel 		= @$_POST['company_tel'];
	$company_address	= @$_POST['company_address'];
	$company_email		= @$_POST['company_email'];
	$company_web		= @$_POST['company_web'];
	
	$compnay_pw 		= md5($compnay_pw);

	$sql = "INSERT INTO company(회사관리자아이디, 회사관리자비밀번호, 회사명, 회사주소, 회사전화번호, 회사이메일, 회사웹사이트)
	VALUES('$company_id', '$compnay_pw', '$company_name', '$company_address', '$company_tel', '$company_email', '$company_web')";
	$ret = mysqli_query($conn, $sql);

	echo "<script> window.location.href='../mainpage_company.php'; </script> ";
?>
