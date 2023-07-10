<?php
	include  $_SERVER['DOCUMENT_ROOT']. "/database/dbconn.php";
	$id 	= @$_GET['아이디'];

	//어학
	$name_lang = @$_POST['name_lang'];
	$num_lang = @$_POST['num_lang'];
	$score_lang = @$_POST['score_lang'];
	$getdate_lang = @$_POST['getdate_lang'];

	$sql0 = mq("SELECT * FROM detail WHERE 아이디='".$id."'"); /* 받아온 idx값을 선택 */
	$board = $sql0->fetch_array();

	$sql1 = mq("INSERT INTO language(세부정보ID, 등록번호, 어학이름, 어학점수, 취득날짜) VALUES('".$board['세부정보ID']."', '$num_lang', '$name_lang', '$score_lang', '$getdate_lang')");

	echo "<script> window.location.href='mypage_normal_detail.php'; </script> "; 
?>