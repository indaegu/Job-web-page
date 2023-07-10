<!-- 일반회원 정보수정 페이지 -->
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
    <a href='/database/mainpage_normal.php' target="_self"><img src="/database/image/DB_logo.png" style="width:250px; height:70px;" alt="Error"/></a>

	<?php
      include  $_SERVER['DOCUMENT_ROOT']. "/database/dbconn.php";
      session_start();
      $s_id = isset($_SESSION["username"])? $_SESSION["username"]:"";
      $sql = mq("SELECT * FROM user WHERE user.아이디='".@$_GET['아이디']."'"); /* 받아온 idx값을 선택 */
      $board = $sql->fetch_array();
	?> 

	<body>
	<h3>일반회원 정보수정</h3>
		<form method="post" action="mypage_normal_modify_ok.php?아이디=<?php echo $board['아이디']; ?>">

			<p>이름 : <?php echo $board['이름']; ?></p>
			<p>생년월일 : <input type="date" value = "<?php echo $board['생년월일'] ?>" name="birthdate"></p>
			<p>전화번호 : <input type="tel" value = "<?php echo $board['전화번호'] ?>"  name="tel" id="telInput"/></p>
			<p>거주지 : <input type="text" value = "<?php echo $board['거주지'] ?>" name ="address"></p>
			<p>이메일주소 : <input type="email" value = "<?php echo $board['이메일주소'] ?>" name ="email"></p>
			<input type=submit value="submit">
		</form>
	</body>
</html>

