<!DOCTYPE html>
<html lang="ko-kr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/layout.css">
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script>
	$(document).ready(function(){
		$(".topmenu").mouseenter(function(){
			$(this).children("ul").stop();
			$(this).children("ul").slideDown(500);
		});
		$(".topmenu").mouseleave(function(){
			$(this).children("ul").stop();
			$(this).children("ul").slideUp(500);
		});
	});
	</script>
</head>
<body>
	<div id="top">
		<div id="top_logo">
			<img src="./img/layout/logo.png">
		</div>
		<div id="top_menu">
			<ul>
				<li class="topmenu">menu1
					<ul>
						<li><a href="#">sm1</a></li>
						<li><a href="#">sm2</a></li>
						<li><a href="#">sm3</a></li>
					</ul>
				</li>
				<li class="topmenu">menu2
					<ul>
						<li><a href="#">sm4</a></li>
						<li><a href="#">sm5</a></li>
						<li><a href="#">sm6</a></li>
					</ul>
				</li>
				<li class="topmenu">menu3
					<ul>
						<li><a href="#">sm7</a></li>
						<li><a href="#">sm8</a></li>
						<li><a href="#">sm9</a></li>
					</ul>
				</li>
				<li class="topmenu">menu4
					<ul>
						<li><a href="#">sm10</a></li>
						<li><a href="#">sm11</a></li>
						<li><a href="#">sm12</a></li>
					</ul>
				</li>
				<li class="topmenu">menu5
					<ul>
						<li><a href="#">sm13</a></li>
						<li><a href="#">sm14</a></li>
						<li><a href="#">sm15</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<div id="content">
		<div id="d_set1">
			<div id="sp_1">1<img src="./img/layout/logo.png"></div>
			<div id="sp_2">2<img src="./img/layout/logo.png"></div>
			<div id="sp_3">3<img src="./img/layout/logo.png"></div>
			<div id="sp_4">4<img src="./img/layout/logo.png"></div>
		</div>
		<div id="d_set2">
			<div id="sp_5">5<img src="./img/layout/logo.png"></div>
			<div id="sp_6">6<img src="./img/layout/logo.png"></div>
			<div id="sp_7">7<img src="./img/layout/logo.png"></div>
			<div id="sp_8">8<img src="./img/layout/logo.png"></div>
		</div>

</div>
</body>
</html>