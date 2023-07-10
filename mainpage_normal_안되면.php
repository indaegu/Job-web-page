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
      <a href='mainpage_normal.php' target="_self"><img src="image/DB_logo.png" style="width:250px; height:70px;" alt="Error"/></a>
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
        <button><a href="/database/mypage/mypage_normal.php?아이디=<?php echo $_SESSION["username"];?>" class="bar">마이페이지</a></button>
      </p>
      <?php }; ?>

    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              카테고리
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <form action="mainpage_normal.php">
              <a>
                <button class="dropdown-item" type="category" name="category" value="경영사무" type="submit">경영·사무</button>
                <button class="dropdown-item" type="category" name="category" value="마케팅광고홍보" type="submit">마케팅·광고·홍보</button>
                <button class="dropdown-item" type="category" name="category" value="IT인터넷" type="submit">IT·인터넷</button>
                <button class="dropdown-item" type="category" name="category" value="디자인" type="submit">디자인</button>
                <button class="dropdown-item" type="category" name="category" value="무역유통" type="submit">무역·유통</button>
                <button class="dropdown-item" type="category" name="category" value="영업고객상담" type="submit">영업·고객상담</button>
                <button class="dropdown-item" type="category" name="category" value="서비스" type="submit">서비스</button>
                <button class="dropdown-item" type="category" name="category" value="연구개발설계" type="submit">연구개발·설계</button>
                <button class="dropdown-item" type="category" name="category" value="생산제조" type="submit">생산·제조</button>
                <button class="dropdown-item" type="category" name="category" value="교육" type="submit">교육</button>
                <button class="dropdown-item" type="category" name="category" value="건설" type="submit">건설</button>
                <button class="dropdown-item" type="category" name="category" value="의료" type="submit">의료</button>
                <button class="dropdown-item" type="category" name="category" value="미디어" type="submit">미디어</button>
                <button class="dropdown-item" type="category" name="category" value="전문특수직" type="submit">전문특수직</button>
              </a>
            </form>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              지역별
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <form action="mainpage_normal.php">
                <a>
                <button class="dropdown-item" type="area" name="area" value="서울" type="submit">서울</button>
                <button class="dropdown-item" type="area" name="area" value="경기" type="submit">경기</button>
                <button class="dropdown-item" type="area" name="area" value="인천" type="submit">인천</button>
                <button class="dropdown-item" type="area" name="area" value="대전" type="submit">대전</button>
                <button class="dropdown-item" type="area" name="area" value="세종" type="submit">세종</button>
                <button class="dropdown-item" type="area" name="area" value="충청남도" type="submit">충남</button>
                <button class="dropdown-item" type="area" name="area" value="충청북도" type="submit">충북</button>
                <button class="dropdown-item" type="area" name="area" value="광주" type="submit">광주</button>
                <button class="dropdown-item" type="area" name="area" value="전라남도" type="submit">전남</button>
                <button class="dropdown-item" type="area" name="area" value="전라북도" type="submit">전북</button>
                <button class="dropdown-item" type="area" name="area" value="대구" type="submit">대구</button>
                <button class="dropdown-item" type="area" name="area" value="경상북도" type="submit">경북</button>
                <button class="dropdown-item" type="area" name="area" value="부산" type="submit">부산</button>
                <button class="dropdown-item" type="area" name="area" value="울산" type="submit">울산</button>
                <button class="dropdown-item" type="area" name="area" value="경상남도" type="submit">경남</button>
                <button class="dropdown-item" type="area" name="area" value="강원" type="submit">강원</button>
                <button class="dropdown-item" type="area" name="area" value="제주" type="submit">제주</button>
              </a>
              </form>
            </div>
          </li>


        </ul>
        <form class="form-inline my-2 my-lg-0" action="mainpage_normal.php">
          <input class="form-control mr-sm-2" type="search" name="search" value="" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <!-- 채용공고 list -->
    <table class = "list-table">
      <thread>
        <tr>
          <th width = 200>회사명</th>
          <th width = 200>카테고리</th>
          <th width = 500>근무지</th>
          <th width = 500>채용명</th>
        </tr>
      </thread>
    <?php
      $sql = mq("SELECT DISTINCT * FROM company INNER JOIN recruitment ON company.회사ID = recruitment.회사ID ORDER BY recruitment.서류마감일");
      while ($board = $sql->fetch_array())
      {

        $pos = strpos($board["회사명"], @$_GET["search"]);
        $pos1 = strpos($board["근무지"], @$_GET["area"]);
        $pos2 = strpos($board["카테고리"], @$_GET["category"]);
              
        if($pos === 0)  
        {?>
              <tbody>
                <tr>            
                  <td width = "200"> <?php echo $board["회사명"]; ?> </td>
                  <td width = "200"> <?php echo $board["카테고리"]; ?> </td>
                  <td width = "200"> <?php echo $board["근무지"]; ?> </td>
                  <td width = "500"> <a href="/database/recruitment/page.php?채용정보ID=<?php echo $board["채용정보ID"];?>"><?php echo $board["채용명"]; ?></a></td>
                  <td width = "200"> <?php echo $board["서류마감일"]; ?> </td>
                </tr>
              </tbody>
        <?php }
        if($pos1 === 0)  
        {?>
              <tbody>
                <tr>            
                  <td width = "200"> <?php echo $board["회사명"]; ?> </td>
                  <td width = "200"> <?php echo $board["카테고리"]; ?> </td>
                  <td width = "200"> <?php echo $board["근무지"]; ?> </td>
                  <td width = "500"> <a href="/database/recruitment/page.php?채용정보ID=<?php echo $board["채용정보ID"];?>"><?php echo $board["채용명"]; ?></a></td>
                  <td width = "200"> <?php echo $board["서류마감일"]; ?> </td>
                </tr>
              </tbody>
        <?php }
        if($pos2 === 0)  
        {?>
              <tbody>
                <tr>            
                  <td width = "200"> <?php echo $board["회사명"]; ?> </td>
                  <td width = "200"> <?php echo $board["카테고리"]; ?> </td>
                  <td width = "200"> <?php echo $board["근무지"]; ?> </td>
                  <td width = "500"> <a href="/database/recruitment/page.php?채용정보ID=<?php echo $board["채용정보ID"];?>"><?php echo $board["채용명"]; ?></a></td>
                  <td width = "200"> <?php echo $board["서류마감일"]; ?> </td>
                </tr>
              </tbody>
        <?php }  
          
        }?>

      </table>
    </div>
  </body>
</html>


