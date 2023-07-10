<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 </head>
  <?php
      include  $_SERVER['DOCUMENT_ROOT']. "/database/dbconn.php";
      session_start();
      $s_id = isset($_SESSION["username"])? $_SESSION["username"]:"";
  ?>

  <?php
      $sql = mq("SELECT DISTINCT * FROM user WHERE user.아이디='".@$_SESSION['username']."'"); /* 받아온 idx값을 선택 */
      $board = $sql->fetch_array();
  ?>

  <form method="post" action="mypage_normal_detail_activity_ok.php?아이디=<?php echo $board['아이디']?>">

    <p>대외 활동</p>
    <p style="width:400px;">대외활동이름 개월수</p>
    <input type="text" name="name_activity"><input type="text" name="days_activity"><br>
    
    <?php
      $sql1 = mq("SELECT * FROM language WHERE language.등록번호 ='".@$_POST['num_lang']."'"); /* 받아온 idx값을 선택 */
      while ($board = $sql1->fetch_array()){
      echo @$_POST['num_lang'];
      };
    ?>

    <input type=submit value="추가하기">
    <a href="mypage_normal_detail.php"><input type="button" value="취소"></a>
  </form>
</htm>
