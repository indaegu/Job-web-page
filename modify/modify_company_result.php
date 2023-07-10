<?php
	include  $_SERVER['DOCUMENT_ROOT']. "/database/dbconn.php";
	$bno				= @$_GET['회사ID'];
	$compnay_pw 		= @$_POST['company_pw'];
	$company_name 		= @$_POST['company_name'];
	$company_tel 		= @$_POST['company_tel'];
	$company_address	= @$_POST['company_address'];
	$company_email		= @$_POST['company_email'];
	$company_web		= @$_POST['company_web'];
	
	// 비밀번호 암호화
	$compnay_pw = md5($compnay_pw);

	$sql = mq("UPDATE company SET 회사관리자비밀번호='".$compnay_pw."',회사명='".$company_name."', 회사주소='".$company_address."',
	회사전화번호='".$company_tel."', 회사이메일='".$company_email."', 회사웹사이트='".$company_web."' WHERE 회사ID='".$bno."'");
?>

<script type="text/javascript">alert("수정되었습니다."); </script>
<meta http-equiv="refresh" content="0 url=/database/mypage/mypage_company.php?회사ID=<?php echo $bno; ?>">
