<?php
    include  $_SERVER['DOCUMENT_ROOT']. "/database/dbconn.php";

	$bno			= @$_GET['채용정보ID'];
	$posting_name 	= @$_POST['posting_name'];
	$career 		= @$_POST['career'];
	$education 		= @$_POST['education'];
	$type 			= @$_POST['type'];
	$job			= @$_POST['job'];
	$salary			= @$_POST['salary'];
	$job_place		= @$_POST['job_place'];
	$end_date		= @$_POST['end_date'];
	$hired			= @$_POST['hired'];
	
	$sql = mq("UPDATE recruitment SET 채용명='".$posting_name."',경력='".$career."', 학력='".$education."',
	고용형태='".$type."', 카테고리='".$job."', 연봉='".$salary."', 근무지='".$job_place."', 서류마감일='".$end_date."', 채용인원='".$hired."' WHERE 채용정보ID='".$bno."'");
?>

<script type="text/javascript">alert("수정되었습니다."); </script>
<meta http-equiv="refresh" content="0 url=/database/mypage/mypage_company_read.php?채용정보ID=<?php echo $bno; ?>">