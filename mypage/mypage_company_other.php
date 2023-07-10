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
    <div class="top">
        <a href='/database/mainpage_company.php' target="_self"><img src="../image/DB_logo.png" style="width:250px; height:70px;" alt="Error"/></a>
    </div>
    
  <!-- 이름 가져오기 -->
    <?php
      include  $_SERVER['DOCUMENT_ROOT']. "/database/dbconn.php";
      session_start();

      $s_id = isset($_SESSION["username"])? $_SESSION["username"]:"";
      $sql = mq("SELECT * FROM company WHERE 회사관리자아이디 ='$s_id'");
      $board = $sql->fetch_array();
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
          <!-- <button><a href="/database/mypage/mypage_company.php">마이페이지</a></button> -->
          <button><a href="/database/modify/modify_company.php?회사ID=<?php echo $board['회사ID']?>">정보수정</a></button>
      </p>
    <?php }; ?>
    
    <button><a href="/database/mypage/mypage_company_my.php">내가 등록한 채용현황</a></button>
    <button><a href="/database/mypage/mypage_company_other.php">다른 회사가 등록한 채용공고</a></button>
 
    <button><a href="/database/job_posting.php">채용 공고 등록하기</a></button><br>

    <div id = "board_area">
      <h1>다른회사가 올린 채용공고<h1>
      <table class = "list-table">
        <thread>
          <tr>
            <th width = 200>회사명</th>
            <th width = 500>채용명</th>
          </tr>
        </thread>
        <?php
          $sql = mq("SELECT DISTINCT * FROM company INNER JOIN recruitment ON company.회사ID = recruitment.회사ID");
          while ($board = $sql->fetch_array())
          {
            if($board['회사관리자아이디'] != $s_id)
            {
              ?>
            
            <tbody>
              <tr>            
                <td width = "200"> <?php echo $board["회사명"]; ?> </td>
                <td width = "500"> <a href="/database/mypage/mypage_company_read.php?채용정보ID=<?php echo $board["채용정보ID"];?>"><?php echo $board["채용명"]; ?></a></td>
              </tr>
            </tbody>
          <?php }} ?>
      </table>
    </div>
  </body>
</html>