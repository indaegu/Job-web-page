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
    <a href='/database/mainpage_normal.php' target="_self"><img src="/database/image/DB_logo.png" style="width:250px; height:70px;" alt="Error"/></a>
	<body>
	<h3>일반회원 회원가입</h3>
		<form method="post" action="sign_normal_result.php">
			<p>아이디 : <input type="text" name ="userid"></p>
			<p>비밀번호 : <input type="password" name ="userpw"></p>
			<p>이름 : <input type="text" name ="name"></p>
			<p>성별 :
				<input type="checkbox" name="gender" value="남" onclick="doOpenCheck(this);"><label>남자</label>
				<input type="checkbox" name="gender" value="여" onclick="doOpenCheck(this);"><label>여자</label></p>
			<p>생년월일 : <input type="date" name="birthdate"></p>
			<p>전화번호 : <input type="tel" name = "tel" id="telInput"></p>
			<p>거주지 : <input type="text" name ="address"></p>
			<p>이메일주소 : <input type="email" name ="email"></p>
			<input type=submit value="submit">
		</form>
	</body>
</html>

