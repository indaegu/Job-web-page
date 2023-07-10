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
  <style>
    .list-container{
      border:solid 1px; 
      height:1000px;

      display: flex;

    }
    .list-item{
      border:solid 1px; 
      width:200px;
      height:150px;
      margin: 10px 10px;
      padding: 10px;
      text-align:center;
    }
  </style>

<script>
	function doOpenCheck(chk) {
		var obj = document.getElementsByName("gender");
		for (var i=0; i<obj.length; i++) {
			if(obj[i] != chk){
				obj[i].checked = false;
			}
		}
	}
</script>

<html>
    <a href='/database/mainpage_normal.php' target="_self"><img src="/database/image/DB_logo.png" style="width:250px; height:70px;" alt="Error"/></a>
	<?php
      include  $_SERVER['DOCUMENT_ROOT']. "/database/dbconn.php";
      session_start();
      $s_id = isset($_SESSION["username"])? $_SESSION["username"]:"";
    ?>

	    <!--회원가입/로그인-->
	<?php if(!$s_id) { ?>
      <p>
          <a href="/database/login/login_select.php" class="bar">로그인</a>
          <a href="/database/sign/sign_select.php" class="bar">회원가입</a>
      </p>
    <?php } else{ /* 로그인 후 */ ?>
      <p>"<?php echo $s_id; ?>"님, 안녕하세요.</p>
      <p>
          <button><a href="/database/login/logout.php" class="bar">로그아웃</a></button>
          <button><a href="/database/mypage/mypage_normal.php">마이페이지</a></button>
      </p>
    <?php }; ?>

	<?php
      $sql = mq("SELECT DISTINCT * FROM user WHERE user.아이디='".@$_SESSION['username']."'"); /* 받아온 idx값을 선택 */
      $board = $sql->fetch_array();
      //$lang_sql = mq("CREATE TEMPORARY TABLE temp('등록번호' varchar(10), '어학이름' varchar(10))");
      //print("성공");
	?>
 
	<body>
	<h3>세부정보 추가하기</h3>
		<form method="post" action="mypage_normal_detail_ok.php?아이디=<?php echo $board['아이디']?>">
			<p>학점 : <input type="text" name ="grade"></p>
			<p>학교 : <input type="text" name ="school"></p>
      
      <a href="mypage_normal_detail_language.php"><input type="button" name="lang" value="어학 추가"></a>

      <a href="mypage_normal_detail_certificate.php"><input type="button" name="cert" value="자격증 추가"></a>

      <a href="mypage_normal_detail_award.php"><input type="button" name="awd" value="수상내역 추가"></a>

      <a href="mypage_normal_detail_activity.php"><input type="button" name="act" value="대외활동 추가"></a>

			<br><input type=submit value="submit" href="mypage_normal_detail.php">
		</form>
	</body>
</html>