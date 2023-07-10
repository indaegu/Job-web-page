<?php
	include  $_SERVER['DOCUMENT_ROOT']. "/database/dbconn.php";
	$id 	= @$_GET['아이디'];

    //대외활동
    $name_activity = @$_POST['name_activity'];
    $days_activity = @$_POST['days_activity'];

	$sql0 = mq("SELECT * FROM detail WHERE 아이디='".$id."'"); /* 받아온 idx값을 선택 */
	$board = $sql0->fetch_array();

	$sq4 = mq("INSERT INTO  activity(세부정보ID, 대외활동, 개월수) VALUES('".$board['세부정보ID']."', '$name_activity', '$days_activity')");

	echo "<script> window.location.href='mypage_normal_detail.php'; </script> "; 
?>