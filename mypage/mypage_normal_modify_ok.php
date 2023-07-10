<?php
    include  $_SERVER['DOCUMENT_ROOT']. "/database/dbconn.php";

	$id			= @$_GET['아이디'];
	$date 		= @$_POST['birthdate'];
	$tel 		= @$_POST['tel'];
	$address 	= @$_POST['address'];
	$email 		= @$_POST['email'];

	$sql = mq("UPDATE user SET 생년월일='".$date."',전화번호='".$tel."', 거주지='".$address."',
	이메일주소='".$email."' WHERE 아이디='".$id."'");
?>

<script type="text/javascript">alert("수정되었습니다."); </script>
<meta http-equiv="refresh" content="0 url=/database/mypage/mypage_normal.php?아이디=<?php echo $id; ?>">