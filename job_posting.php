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
	<body>
		<div class="top">
			<a href='mainpage_company.php' target="_self"><img src="image/DB_logo.png" style="width:250px; height:70px;" alt="Error"/></a>
		</div>
		<h3>공고 올리기</h3>
		<form method="POST" action="job_posting_result.php">
			<p>채용명 : <input type="text" name ="posting_name"></p>
			<p>경력 :
			<select name = "career">
				<option value = ""> ==선택== </option>
				<option value = "상관없음"> 상관없음</option>
				<option value = "경력자"> 경력자</option>
				<option value = "신입"> 신입</option>
			</select></p>
			<p>학력 :
			<select name = "education">
				<option value = ""> ==선택== </option>
				<option value = "상관없음"> 상관없음</option>
				<option value = "2,3년제대학"> 2, 3년제 대학</option>
				<option value = "4년제대학"> 4년제 대학</option>
				<option value = "대학원"> 대학원</option>
			</select></p>
			<p>고용형태 :
			<select name = "type">
				<option value = ""> ==선택== </option>
				<option value = "정규직"> 정규직</option>
				<option value = "계약직"> 계약직</option>
				<option value = "인턴"> 인턴</option>
			</select></p>
			<p>카테고리 :
			<select name = "job">
				<option value = ""> ==선택== </option>
				<option value = "경영사무"> 경영·사무</option>
				<option value = "마케팅광고홍보"> 마케팅·광고·홍보</option>
				<option value = "IT인터넷"> IT·인터넷</option>
				<option value = "디자인"> 디자인</option>
				<option value = "무역유통"> 무역·유통</option>
				<option value = "영업고객상담"> 영업·고객상담</option>
				<option value = "서비스"> 서비스</option>
				<option value = "연구개발설계"> 연구개발·설계</option>
				<option value = "생산제조"> 생산·제조</option>
				<option value = "교육"> 교육</option>
				<option value = "건설"> 건설</option>
				<option value = "의료"> 의료</option>
				<option value = "미디어"> 미디어</option>
				<option value = "전문특수직"> 전문특수직</option>
			</select></p>
			<p>연봉 : <input type="text" name="salary"></p>
			<p>근무지 : <input type="text" name="job_place"></p>
			<p>서류마감일 : <input type="date" name="end_date"></p>
			<p>채용인원 : <input type="text" name="hired"></p>
			<!-- <p>상세 정보 사진 첨부 : <input type="file" id="detail" name="detail" accept="image/png, image/jpeg"> </p> -->
			<input type=submit value="submit">
		</form>
	</body>
</html>