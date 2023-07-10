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

  <body>
    <div class="top">
      <a href='../mainpage_normal.php' target="_self"><img src="../image/DB_logo.png" style="width:250px; height:70px;" alt="Error"/></a>
      <?php
        include  $_SERVER['DOCUMENT_ROOT']. "/database/dbconn.php";
        session_start();
        $s_id = isset($_SESSION["username"])? $_SESSION["username"]:"";
      ?>

      <!--회원가입/로그인-->
      <?php if(!$s_id) { ?>
      <p>
        <button><a href="/database/login/login_select.php" class="bar">로그인</a></button>
        <button><a href="/database/sign/sign_select.php" class="bar">회원가입</a></button>
      </p>
      <?php } else{ /* 로그인 후 */ ?>
      <p>"<?php echo $s_id; ?>"님, 안녕하세요.</p>
      <p>
        <button><a href="/database/login/logout.php" class="bar">로그아웃</a></button>
        <button><a href="/database/mypage/mypage_normal.php" class="bar">마이페이지</a></button>
      </p>
      <?php }; ?>
    
    
    <?php
      $sql = mq("SELECT DISTINCT * FROM user WHERE user.아이디='".@$_SESSION['username']."'"); /* 받아온 idx값을 선택 */
      $board = $sql->fetch_array();
	  ?>

    <div id = "board_read">
      <h2>마이페이지</h2>
      <h4>기본정보</h4>
      <p>이름 : <?php echo $board["이름"]; ?></p>
      <p>성별 : <?php echo $board["성별"]; ?></p>
      <p>생년월일 : <?php echo $board["생년월일"]; ?></p>
      <p>전화번호 : <?php echo $board["전화번호"]; ?></p>
      <p>주소 : <?php echo $board["거주지"]; ?></p>
      <p>이메일주소 : <?php echo $board["이메일주소"]; ?></p>
      <p><button><a href="/database/mypage/mypage_normal_modify.php?아이디=<?php echo $board['아이디'];?>" class="bar">수정하기</a></button></p>
    </div>

    <div id = "board_read2">
      <h4>세부정보</h4>
      <p><button><a href="/database/mypage/mypage_normal_detail.php?아이디=<?php echo $board['아이디'];?>" class="bar">추가하기</a></button></p>
    </div>
  </body>
</html>