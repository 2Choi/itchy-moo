<!DOCTYPE html>
<html lang="ko-kr">
<head>
	<meta charset="utf-8">
	<style>
	#bd-1 {
		width: 100%
	}
	</style>
</head>
<body>

	<div id="bd-1">
		<table id="bd-title">
			<tr>
				<td>번호</td>
				<td>작성자</td>
				<td>제목</td>
				<td>날짜</td>
			</tr>
			<?php
			$servername = "localhost";
			$username = "root";
			$password = "apmsetup";
			$dbname = "mainboard";

			$conn = new mysqli ($servername, $username, $password, $dbname);

			$sql = "SELECT * FROM mainboard;";
			$result = $conn->query($sql);

			while($row = $result->fetch_assoc()) {
				echo "<tr>";
				echo "<td>".$row["PostNum"]."</td>";
				echo "<td>".$row["Author"]."</td>";
				echo "<td>";
				echo "<a href=\"/d-4.php?id=".$row["PostNum"]."\">".$row["Title"]."</a>";
				echo "</td>";
				echo "<td>".$row["Date"]."</td>";
				echo "</tr>";
			}

			$conn->close();
			?>
		</table>
	</div>
	<form>
</body>
</html>