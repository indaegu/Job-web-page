


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
      $sql = mq("SELECT DISTINCT * FROM company INNER JOIN recruitment ON company.회사ID = recruitment.회사ID WHERE recruitment.채용정보ID='".@$_GET['채용정보ID']."'"); /* 받아온 idx값을 선택 */
      $board = $sql->fetch_array();
	  ?>

    <?php
      $sql1 = mq("SELECT count('채용정보ID') AS '종합지원자수' FROM user_recruitment_mapping WHERE 채용정보ID = '".$board['채용정보ID']."'");
      $board1 = $sql1->fetch_array();
	  ?> 

    <div id = "board_read">
      <h2>채용명 : <?php echo $board["채용명"]; ?></h2>
      회사명 : <?php echo $board["회사명"]; ?></br>
      경력 : <?php echo $board["경력"]; ?></br>
      학력 : <?php echo $board["학력"]; ?></br>
      고용형태 : <?php echo $board["고용형태"]; ?></br>
      카테고리 : <?php echo $board["카테고리"]; ?></br>
      연봉 : <?php if ($board['연봉'] == 0){print"회사 내규에 따름";} else {print"$board[연봉]만원";}?></br>
      서류마감일 : <?php echo $board["서류마감일"]; ?></br>
      근무지 : <?php echo $board["근무지"]; ?></br>
      채용인원 : <?php echo $board["채용인원"]; ?></br>
      실시간경쟁률 : <?php echo $board1['종합지원자수']/$board["채용인원"],":1";?>
      <?php if($board['회사관리자아이디'] == $s_id) :?>
        <div id="bo_ser">
          <ul>
            <li><a href="mypage_company_my.php">[목록으로]</a></li>
            <li><a href="mypage_company_modify.php?채용정보ID=<?php echo $board['채용정보ID']; ?>">[수정]</a></li>
            <li><a href="mypage_company_delete.php?채용정보ID=<?php echo $board['채용정보ID']; ?>">[삭제]</a></li>
          </ul>
        </div>
      <?php endif; ?>
      <?php if($board['회사관리자아이디'] != $s_id) :?>
        <div id="bo_ser">
          <ul>
            <li><a href="apply.php?채용정보ID=<?php echo $board['채용정보ID']; ?>&ID=<?php echo $s_id; ?>" onclick="return confirm('지원하시겠습니까?');">[지원하기]</a></li>
            <li><a href="../mainpage_normal.php">[메인화면으로]</a></li>
          </ul>
        </div>
      <?php endif; ?>
  </body>
</html>