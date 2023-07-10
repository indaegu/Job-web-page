<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<title>LOGIN</title>
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</head>

<body>
	<form method="post" action="/database/login/check_login_normal.php" class="loginForm">
 		<h2>일반회원 로그인</h2>
		<div class="idForm">
			<input type="text" name ="id" class="id" placeholder="Username">
		</div>
		<div class="passForm">
			<input type="password" name ="pw" class="pw" placeholder="Password">
		</div>
		<button type="submit" class="btn" onclick="button()">로그인</button>
	    <div class="bottomText"><a href="/database/sign/sign_select.php">회원가입</a></div>
	</form>
</body>
</html>