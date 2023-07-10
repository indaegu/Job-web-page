<?php
	include  $_SERVER['DOCUMENT_ROOT']. "/database/dbconn.php";
	$id 	= @$_GET['아이디'];

	//자격증
	$name_cert = @$_POST['name_cert'];
	$num_cert = @$_POST['num_cert'];
	$getdate_cert = @$_POST['getdate_cert'];


	$sql = mq("SELECT * FROM detail WHERE 아이디='".$id."'"); /* 받아온 idx값을 선택 */
	$board = $sql->fetch_array();

	$sq13 = mq("INSERT INTO certificate(세부정보ID, 등록번호, 자격증이름, 취득날짜) VALUES('".$board['세부정보ID']."', '$num_cert', '$name_cert', '$getdate_cert')");

	echo "<script> window.location.href='mypage_normal_detail.php'; </script> ";
?>