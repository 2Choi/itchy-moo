<!DOCTYPE html>
<html lang="ko-kr">
<head>
	<meta charset="utf-8">
	<style>
	.top {
		display : inline;
	}
	</style>
</head>
<body>
	<form action="./form-1.php" method="post">
		<div class="top">
			작성자
			<input type="text" name="author">
		</div>
		<div class="top">
			제목
			<input type="text" name="title">
		</div>
		<div class="top">
			날짜
			<input type="text" name="date">
		</div>
		<div>
			<p>내용</p>
			<textarea rows="20" cols="150" name="content"></textarea>
		</div>
		<input type="submit" name="submit" value="작성완료"></input>
	</form>
	<?php

	if(!empty($_POST["submit"])) {

		$servername = "localhost";
		$username = "root";
		$password = "apmsetup";
		$dbname = "mainboard";


		$conn = new mysqli ($servername, $username, $password, $dbname);

		$sql = "INSERT INTO mainboard (author, title, date, content)
		VALUES ('".$_POST["author"]."','".$_POST["title"]."','".$_POST["date"]."','".$_POST["content"]."');";
		$result = $conn->query($sql);

		echo "
		<script>
		alert(\"작성이 완료되었습니다\");
		location.replace(\"./d-2.php\");
		</script>
		";
	}
	?>

</body>
</html>