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
    
    <!-- 회사관리자아이디 가져오기 -->
    <!-- 관리자 아이디는 UNIQUE해서, 중복값을 가지지 않는다. -->
    <?php
      include  $_SERVER['DOCUMENT_ROOT']. "/database/dbconn.php";
      session_start();
      $s_id = isset($_SESSION["username"])? $_SESSION["username"]:"";
      $bno = $_GET['회사ID'];
      $sql = mq("SELECT * FROM company WHERE company.회사ID='$bno';"); /* 받아온 idx값을 선택 */
      $board = $sql->fetch_array();
    ?>

    <!-- 초라하지만... 보안기능 -->
    <!-- 회사관리자아이디가 같지 않으면 수정불가능 -->
    <?php
      if ($s_id != $board['회사관리자아이디'])
      {
        echo '<script>alert("권한이 없습니다!.");</script>'; // 경고창
        echo '<script>history.back();</script>'; // 뒤로가기
      }
    ?>

    <!--회원가입 / 로그인창-->
    <?php if(!$s_id) { ?>
      <p>
        <button><a href="/database/login/login_select.php" class="bar">로그인</a></button>
        <button><a href="/database/sign/sign_select.php" class="bar">회원가입</a></button>
      </p>
      <?php } else{ /* 로그인 후 */ ?>
      <p>"<?php echo $s_id; ?>"님, 안녕하세요.</p>
      <p>
        <button><a href="/database/login/logout.php">로그아웃</a></button>
        <!-- <button><a href="/database/mypage/mypage_company.php">마이페이지</a></button> -->
        <button><a href="/database/modify/modify_company.php?회사ID=<?php echo $board['회사ID']?>">정보수정</a></button>
      </p>
    <?php }; ?>
    
    <div id = "board_write">
      <h2>정보를 수정합니다</h2>
        <div id = "write_area">
          <form method="post" action="modify_company_result.php?회사ID=<?php echo $bno; ?>">
          <p>아이디       : <?php echo $board['회사관리자아이디']?></p>
          <p>비밀번호     : <input type="password" name="company_pw"       ></p>
          <p>회사명       : <input type="text"     name="company_name"     value = "<?php echo $board['회사명']?>"></p>
          <p>회사주소     : <input type="text"     name="company_address"  value = "<?php echo $board['회사주소']?>"></p>
          <p>전화번호     : <input type="tel"      name="company_tel"      value = "<?php echo $board['회사전화번호']?>"></p>
          <p>이메일주소   : <input type="email"    name="company_email"    value = "<?php echo $board['회사이메일']?>"></p>
          <p>회사웹사이트 : <input type="text"     name="company_web"      value = "<?php echo $board['회사웹사이트']?>"></p>
          <input type=submit value="submit">
      </div>
    </div>
  </body>
</html>