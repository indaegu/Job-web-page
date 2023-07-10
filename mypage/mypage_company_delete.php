<?php
  include  $_SERVER['DOCUMENT_ROOT']. "/database/dbconn.php";
	
	$bno = $_GET['채용정보ID'];
	$sql = mq("DELETE FROM recruitment WHERE 채용정보ID='$bno';");
?>

<script type="text/javascript">alert("삭제되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/database/mainpage_company.php">