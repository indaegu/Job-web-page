<!-- 기업회원 회원가입 페이지 -->
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 </head>
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
    <a href='/database/mainpage_company.php' target="_self"><img src="/database/image/DB_logo.png" style="width:250px; height:70px;" alt="Error"/></a>
	<body>
	<h3>기업회원 회원가입</h3>
		<form method="post" action="sign_company_result.php">
			<p>아이디 : <input type="text" name ="company_id"></p>
			<p>비밀번호 : <input type="password" name ="company_pw"></p>
			<p>회사명 : <input type="text" name ="company_name"></p>
			<p>회사주소 : <input type="text" name ="company_address"></p>
			<p>전화번호 : <input type="tel" name = "company_tel"></p>
			<p>이메일주소 : <input type="email" name ="company_email"></p>
			<p>회사웹사이트 : <input type="text" name ="company_web"></p>
			<input type=submit value="submit">
		</form>
	</body>
</html>

