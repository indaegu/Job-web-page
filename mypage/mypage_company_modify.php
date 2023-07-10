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
    
  <!-- 이름, 정보 가져오기 -->
    <?php
      include  $_SERVER['DOCUMENT_ROOT']. "/database/dbconn.php";
      session_start();
      $s_id = isset($_SESSION["username"])? $_SESSION["username"]:"";
      $bno = $_GET['채용정보ID'];
      $sql = mq("SELECT DISTINCT * FROM company INNER JOIN recruitment ON company.회사ID = recruitment.회사ID WHERE recruitment.채용정보ID='$bno';"); /* 받아온 idx값을 선택 */
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
    <!-- 보안기능 끝 -->

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
          <button><a href="/database/modify/modify_company.php?회사ID=<?php echo $board['회사ID']?>">정보수정</a></button>      </p>
    <?php }; ?>
    

    <button><a href="/database/mypage/mypage_company_my.php">내가 등록한 채용현황</a></button>
    <button><a href="/database/mypage/mypage_company_other.php">다른 회사가 등록한 채용공고</a></button>

    <button><a href="/database/job_posting.php">채용 공고 등록하기</a></button><br>
    </br>
    <?php
      $sql = mq("SELECT DISTINCT * FROM company INNER JOIN recruitment ON company.회사ID = recruitment.회사ID WHERE recruitment.채용정보ID='".@$_GET['채용정보ID']."'"); /* 받아온 idx값을 선택 */
      $board = $sql->fetch_array();
	  ?> 

    <div id = "board_write">
      <h2>글을 수정합니다</h2>
        <div id = "write_area">
          <form method = "POST" action = "mypage_company_modify_ok.php?채용정보ID=<?php echo $bno; ?>">
          <p>채용명 : <input type="text" name ="posting_name" value = "<?php echo $board['채용명']?>"></p>
          <p>경력 : <select name = "career">
            <option value = ""> ==선택== </option>
            <option value = "상관없음" <?php if ($board["경력"] == "상관없음") echo "selected"; ?>> 상관없음</option>
            <option value = "경력자" <?php if ($board["경력"] == "경력자") echo "selected"; ?>> 경력자</option>
            <option value = "신입" <?php if ($board["경력"] == "신입") echo "selected"; ?>> 신입</option>
          </select></p>
          <p>학력 : <select name = "education">
            <option value = ""> ==선택== </option>
            <option value = "상관없음" <?php if ($board["학력"] == "상관없음") echo "selected"; ?>> 상관없음</option>
            <option value = "2,3년제대학" <?php if ($board["학력"] == "2,3년제대학") echo "selected"; ?>> 2, 3년제 대학</option>
            <option value = "4년제대학" <?php if ($board["학력"] == "4년제대학") echo "selected"; ?>>4년제 대학</option>
            <option value = "대학원" <?php if ($board["학력"] == "대학원") echo "selected"; ?>> 대학원</option>
          </select></p>
          <p>고용형태 :
          <select name = "type">
            <option value = ""> ==선택== </option>
            <option value = "정규직" <?php if ($board["고용형태"] == "정규직") echo "selected"; ?>> 정규직</option>
            <option value = "계약직" <?php if ($board["고용형태"] == "계약직") echo "selected"; ?>> 계약직</option>
            <option value = "인턴" <?php if ($board["고용형태"] == "인턴") echo "selected"; ?>> 인턴</option>
          </select></p>
          <p>카테고리 :
          <select name = "job">
            <option value = ""> ==선택== </option>
            <option value = "경영사무" <?php if ($board["카테고리"] == "경영사무") echo "selected"; ?>>경영·사무</option>
            <option value = "마케팅광고홍보" <?php if ($board["카테고리"] == "마케팅광고홍보") echo "selected"; ?>>마케팅·광고·홍보</option>
            <option value = "IT인터넷" <?php if ($board["카테고리"] == "IT인터넷") echo "selected"; ?>>IT·인터넷</option>
            <option value = "디자인" <?php if ($board["카테고리"] == "디자인") echo "selected"; ?>>디자인</option>
            <option value = "무역유통" <?php if ($board["카테고리"] == "무역유통") echo "selected"; ?>>무역·유통</option>
            <option value = "영업고객상담" <?php if ($board["카테고리"] == "영업고객상담") echo "selected"; ?>>영업·고객상담</option>
            <option value = "서비스" <?php if ($board["카테고리"] == "서비스") echo "selected"; ?>>서비스</option>
            <option value = "연구개발설계" <?php if ($board["카테고리"] == "연구개발설계") echo "selected"; ?>>연구개발·설계</option>
            <option value = "생산제조" <?php if ($board["카테고리"] == "생산제조") echo "selected"; ?>> 생산·제조</option>
            <option value = "교육" <?php if ($board["카테고리"] == "교육") echo "selected"; ?>>교육</option>
            <option value = "건설" <?php if ($board["카테고리"] == "건설") echo "selected"; ?>>건설</option>
            <option value = "의료" <?php if ($board["카테고리"] == "의료") echo "selected"; ?>>의료</option>
            <option value = "미디어" <?php if ($board["카테고리"] == "미디어") echo "selected"; ?>>미디어</option>
            <option value = "전문특수직" <?php if ($board["카테고리"] == "전문특수직") echo "selected"; ?>>전문특수직</option>
          </select></p>
          <p>연봉 : <input type="text" name="salary" value = "<?php echo $board['연봉']?>"></p>
          <p>근무지 : <input type="text" name="job_place" value = "<?php echo $board['근무지']?>"></p>
          <p>서류마감일 : <input type="date" name="end_date" value = "<?php echo $board['서류마감일']?>"></p>
          <p>채용인원 : <input type="text" name="hired" value = "<?php echo $board['채용인원']?>"></p>
          <!-- <p>상세 정보 사진 첨부 : <input type="file" id="detail" name="detail" accept="image/png, image/jpeg"> </p> -->
          <input type=submit value="submit">
      </div>
    </div>
  </body>
</html>