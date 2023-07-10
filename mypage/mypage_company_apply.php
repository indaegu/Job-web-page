<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 </head>
  <body>
	<?php
		include $_SERVER['DOCUMENT_ROOT']. "/database/dbconn.php";

		$sel1 = mq("SELECT DISTINCT * FROM company INNER JOIN recruitment ON company.회사ID = recruitment.회사ID WHERE recruitment.채용정보ID = '".@$_GET['채용정보ID']."'");
		$check = mq("SELECT * FROM user_recruitment_mapping");
		while($board_s1 = $sel1->fetch_array()){
		while ($board = $check->fetch_array()){
			if (($board['아이디'] == $_GET['아이디']) && (($board['채용정보ID'] == $_GET['채용정보ID'])))
			{
				$sql2 = mq("UPDATE user SET 합격한회사 = '".$board_s1['회사명']."' WHERE 아이디 = '".$_GET['아이디']."'");
				$sql = mq("DELETE FROM user_recruitment_mapping WHERE 아이디 = '".$_GET['아이디']."' AND 채용정보ID = '".$_GET['채용정보ID']."'");
				?>
				<script>
					alert("채용하였습니다!!");
					history.go(-1);
				</script>
			<?php }
		}}
	?>
  </body>
</html>