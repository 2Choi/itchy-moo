<!DOCTYPE html>
<html lang="ko-kr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/login.css">
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

	<script>
	$(document).ready(function(){
		$("#black").animate({
			opacity:0
		},7000);
	});
	</script>

</head>
<body>
	<div id="login">
		<div id="black"></div>
		<form action="./index.php" method="post">
			<div class="margin" id="id">ID</div>
			<div class="margin" id="idvar"><input type="text" name="login-id" placeholder="아이디를 입력하시오" autofocus="true"></div>
			<div class="margin" id="pw">PW</div>
			<div class="margin" id="pwvar"><input type="password" name="password" placeholder="비밀번호를 입력하시오"></div>
			<?

			$servername = "localhost";
			$username = "root";
			$password = "apmsetup";
			$dbname = "mainboard";


			$conn = new mysqli ($servername, $username, $password, $dbname);

			$sql = "SELECT * FROM membership WHERE ID='".$_POST["login-id"]."' AND PW='".$_POST["password"]."';";

			$result = $conn->query($sql);


			if(mysqli_num_rows($result) == 1)
			{
				echo "
				<script>
				location.replace(\"./d-1.php\");
				</script>";
			}

			?>
			<input type="submit" value="로그인" id="submit">

		</form>
		<a href="./member.php">회원가입</a>
	</div>
</body>
</html>
