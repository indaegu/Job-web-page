<?php
	include  $_SERVER['DOCUMENT_ROOT']. "/database/dbconn.php";
	$id 	= @$_GET['아이디'];

	//수상경력
	$name_award = @$_POST['name_award'];
	$type_award = @$_POST['type_award'];
	$date_award = @$_POST['date_award'];

	$sql0 = mq("SELECT * FROM detail WHERE 아이디='".$id."'"); /* 받아온 idx값을 선택 */
	$board = $sql0->fetch_array();

	$sq3 = mq("INSERT INTO  award(세부정보ID, 이름, 종류, 날짜) VALUES('".$board['세부정보ID']."', '$name_award', '$type_award', '$date_award')");

	echo "<script> window.location.href='mypage_normal_detail.php'; </script> "; 
?>