<!DOCTYPE html>
<html lang="ko-kr">
<head>
	<meta charset="utf-8">
	<style>
	.content-top{
		width: 100%;
	}
	.content-top > div {
		display: inline-block;
		width: 33%;
	}
	.content-wrap {
		width: 100%;
	}
	.content {
		width: 100%;
	}
	.reply-top {
		display: inline-block;
	}
	</style>
</head>
<body>
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "apmsetup";
	$dbname = "mainboard";


	$conn = new mysqli ($servername, $username, $password, $dbname);

	$sql="SELECT * FROM mainboard WHERE PostNum=".$_GET["id"].";";

	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	?>
	<div class="content-top">
		<div class="title">
			<? echo $row["Title"]; ?>
		</div>
		<div class="author">

			<? echo $row["Author"]; ?>
		</div>
		<div class="date">

			<? echo $row["Date"]; ?>
		</div>
	</div>
	<div class="contnet-wrap">
		<div class="content">
			<pre><? echo $row["Content"]; ?></pre>
		</div>
	</div>
	<?php

	$sql="SELECT * FROM mainboard WHERE ReplyPost=".$_GET["id"].";";

	$result = $conn->query($sql);

	while($row = $result->fetch_assoc()) {
		?>
		<div>
			<div class="reply-top">
				<? echo $row["Author"];?>
			</div>
			<div class="reply-top">
				<? echo $row["Content"];?>
			</div>
		</div>
		<?
	}
	?>


	<div>
		<form action="./d-4.php?id=<?echo $_GET["id"];?>" method="post">
			<textarea name="reply"></textarea>
			<input type="submit" name="submit" value="작성"></input>
			<?
			if(!empty($_POST["submit"])) {
				$sql = "INSERT INTO mainboard (Author, Content, ReplyPost )
				VALUES ('kkk','".$_POST["reply"]."','".$_GET["id"]."');";
				$result = $conn->query($sql);

		echo "
		<script>
		alert(\"작성이 완료되었습니다\");
		location.replace(\"./d-4.php?id=".$_GET["id"]."\");
		</script>
		";
			}
			?>
		</form>
	</div>

</body>
</html>