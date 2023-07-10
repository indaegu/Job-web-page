<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JS Bin</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 </head>
  <style>
    .employ-container{
      border:solid 1px; 
      height:1000px;
      text-align: center;
    }
    .employ-detail-competition, .employ-detail-pass, .employ-detail-img{
      border:solid 1px; 
      margin:20px 0;
    }
    .employ-simple-info{
      width:65%;
      border:solid 1px;
    }
    .employ-simple-company{
      width:35%;
      border:solid 1px;
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
		<a href='mainpage_normal.php' target="_self"><img src="DB_logo.png" style="width:250px; height:70px;" alt="Error"/></a>

	</div>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
<!--     <a class="navbar-brand" href="#">로고</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">채용공고</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            직무별
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">경영·사무</a>
            <a class="dropdown-item" href="#">마케팅·광고·홍보</a>
            <a class="dropdown-item" href="#">IT·인터넷</a>
            <a class="dropdown-item" href="#">디자인</a>
            <a class="dropdown-item" href="#">무역·유통</a>
            <a class="dropdown-item" href="#">영업·고객상담</a>
            <a class="dropdown-item" href="#">서비스</a>
            <a class="dropdown-item" href="#">연구개발·설계</a>
            <a class="dropdown-item" href="#">생산·제조</a>
            <a class="dropdown-item" href="#">교육</a>
            <a class="dropdown-item" href="#">건설</a>
            <a class="dropdown-item" href="#">의료</a>
            <a class="dropdown-item" href="#">미디어</a>
            <a class="dropdown-item" href="#">전문특수직</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            지역별
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">서울</a>
            <a class="dropdown-item" href="#">경기</a>
            <a class="dropdown-item" href="#">인천</a>
            <a class="dropdown-item" href="#">대전</a>
            <a class="dropdown-item" href="#">세종</a>
            <a class="dropdown-item" href="#">충남</a>
            <a class="dropdown-item" href="#">충북</a>
            <a class="dropdown-item" href="#">광주</a>
            <a class="dropdown-item" href="#">전남</a>
            <a class="dropdown-item" href="#">전북</a>
            <a class="dropdown-item" href="#">대구</a>
            <a class="dropdown-item" href="#">경북</a>
            <a class="dropdown-item" href="#">부산</a>
            <a class="dropdown-item" href="#">울산</a>
            <a class="dropdown-item" href="#">경남</a>
            <a class="dropdown-item" href="#">강원</a>
            <a class="dropdown-item" href="#">제주</a>
            <a class="dropdown-item" href="#">전국</a>

          </div>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">회사추천</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <div class = "employ-container" >
    <div class = "employ-simple" style=" display:flex; height:300px;">
        <div class = "employ-simple-info">
           채용 간단 정보
        </div>
        <div class = "employ-simple-company">
          회사 정보
        </div>
    </div>
    <button>지원하기</button>
    <div class = "employ-detail" style="height:550px;">
        <div class = "employ-detail-competition" style="height:50px;">
          실시간 경쟁률
        </div>  
        <div class = "employ-detail-pass" style="height:100px;">
          합격자통계
        </div>  
        <div class = "employ-detail-img" style="height:400px;">
          상세 요강 
        </div>  
    </div>
  </div>
</body>
</html>