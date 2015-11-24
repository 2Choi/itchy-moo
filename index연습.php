<!DOCTYPE html>
<html lang="ko-kr">
<head>
	<meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>
	<div id="test">
		홀<input type="radio" name="12"></input>
		짝<input type="radio" name="12"></input>
		<input type="submit" name="12" value="contec"></input>
	<?php
// 1 chance out of 2, 50%
	if (mt_rand(0, 299) %2 == 0) {
		echo "짝";
	}
	else {
		echo "홀";
	}
	?>
</div>
</body>
</html>