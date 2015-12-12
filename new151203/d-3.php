<!DOCTYPE html>
<html lang="ko-kr">
<head>
	<meta charset="utf-8">
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<style>
	/*상단 로고 스타일 시작*/
	body
	{
		width: 100%;
		height: 100%;
	}
	#logo {
		text-align: center;
	}
	#logo-img {
		width: 15%;
		height: 60px;
	}
	#topleft{
		text-align:left;
		position: absolute;
		top:5%;
		right:10%;
		width: 10%;
		left: 10%;
	}
	#topright{
		position: absolute;
		left: 90%;
		top: 5%;
	}
	/*상단 로고 스타일 끝*/
	/*메뉴 스타일 시작*/
	#top-menu > li{
		display: inline;
		font-weight:bold;
		width: 20%;
		padding: 2%;
	}
	#top-menu {
		display: flex;
	}
	#top-menu ul :hover > li{
		color:pink;
	}
	/*메뉴 스타일  끝*/
	/*하단 메뉴 스타일  끝*/
	#down-menu > li{
		display: inline;
		font-weight:bold;
		width: 14%;
	}
	#down-menu {
		display: flex;
	}
	#content p{
		text-overflow:ellipsis;
		overflow:hidden;
		white-space:nowrap;
	}
	body{
    -ms-overflow-style: none;
    overflow: auto;
}
::-webkit-scrollbar { 
    display: none; 
}
	/*하단 메뉴 스타일  끝*/
	</style>
</head>
<body>
	<div id="top">
		<div id="topleft">
			<img id="top-l-img" src="./img/menu.png">
		</div>
		<div id="logo">
			<img id="logo-img" src="./img/k-083.jpg">
		</div>
		<div id="topright">
			<img id="logo-r-img" src="./img/glas.png">
		</div>
	</div>
	<div id="topmenu">
		<ul id="top-menu">
			<li class="tm-1">사례해설</li>
			<li class="tm-1">동영상강의</li>
			<li class="tm-1">체크리스트</li>
			<li class="tm-1">칼럼</li>
			<li class="tm-1">Q&A</li>
		</ul>
		<script>
		$(document).ready(function(){
			$(".tm-1").mouseenter(function(){
				$(this).css( { background: "blue"});
			});
			$(".tm-1").mouseleave(function(){
				$(this).css( { background: "white"});
			});
		});
		</script>
</div>
<div id="downmenu">
	<ul id="down-menu">
		<li>전체</li>
		<li>협상</li>
		<li>계약</li>
		<li>형사·고소</li>
		<li>채권회수</li>
		<li>부동산</li>
		<li>지재권</li>
	</ul>
</div>
<div id="content">
<p>ㄱㄱㄱㄱㄱㄱㄱㄱㄱㄱㄱㄱㄱㄱㄱㄱㄱㄱㄱㄱㄱㄱㄱㄱㄱㄱㄱ</p>
<p>ㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴ</p>
<p>ㄷㄷㄷㄷㄷㄷㄷㄷㄷㄷㄷㄷㄷㄷㄷㄷㄷㄷㄷㄷㄷㄷㄷㄷㄷㄷㄷㄷ</p>
<p>ㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹㄹ</p>
</div>
</body>
</html>