<!DOCTYPE html>
<html lang="ko-kr">
<head>
	<meta charset="utf-8">
	<style>
	.join-os {
		text-align: center;
		border: 1px solid gray;
		margin: 30px;
		color: gray;
		font-weight: bold;
	}
	</style>
</head>
<body>
	<div>
		<form action="#" method="post">
			<div id="jointop">
				<div class="join-os">
					아이디
					<input type="text" name="ID">
				</div>
				<div class="join-os">
					성명
					<input type="text" name="membername">
				</div>
				<div class="join-os">
					생년월일
					<input type="text" name="birthday">
				</div>
				<div class="join-os">
					비밀번호
					<input type="text" name="PW">
				</div>
				<div class="join-os">
					비밀번호 확인
					<input type="text" name="PW-c">
				</div>
			</div>
			<input type="submit" name="submit" value="가입신청"></input>
		</form>
		<?php
	$servername = "localhost";
	$username = "root";
	$password = "apmsetup";
	$dbname = "mainboard";


	$conn = new mysqli ($servername, $username, $password, $dbname);

	$sql = "INSERT INTO membership (membername, ID, birthday, PW)
		VALUES ('".$_POST["membername"]."','".$_POST["ID"]."','".$_POST["birthday"]."','".$_POST["PW"]."');";

	$result = $conn->query($sql);
	?>
	</div>


</body>
</html>