<?php
	include  $_SERVER['DOCUMENT_ROOT']. "/database/dbconn.php";

	// 특정 id 가져오기
    session_start();
	$s_id = isset($_SESSION["username"])? $_SESSION["username"]:"";
	mysqli_select_db($conn, "mydb");
	$query = "SELECT * FROM company WHERE company.회사관리자아이디 LIKE '$s_id'";
	$result = mysqli_query($conn, $query);
	$board = mysqli_fetch_array($result);

	$id 			= $board['회사ID'];
	$posting_name 	= @$_POST['posting_name'];
	$career 		= @$_POST['career'];
	$education 		= @$_POST['education'];
	$type 			= @$_POST['type'];
	$job			= @$_POST['job'];
	$salary			= @$_POST['salary'];
	$job_place		= @$_POST['job_place'];
	$end_date		= @$_POST['end_date'];
	$hired			= @$_POST['hired'];

	$sql = "INSERT INTO recruitment(회사ID, 채용명, 경력, 학력, 고용형태, 카테고리, 근무지, 서류마감일, 연봉, 채용인원)
	VALUES('$id', '$posting_name', '$career', '$education', '$type', '$job', '$job_place', '$end_date', '$salary',  '$hired')";
	$ret = mysqli_query($conn, $sql);

	echo "<script> window.location.href='../database/mainpage_company.php'; </script> ";
?>
