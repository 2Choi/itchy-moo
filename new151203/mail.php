<html>
<head>
</head>
<body>
<?php
// 메세지
$message = "Line 1\nLine 2\nLine 3";

// 한 줄이 70 문자를 넘어갈 때를 위하여, wordwrap()을 사용해야 합니다.
$message = wordwrap($message, 70);

// 전송
mail('ctg1125@naver.com', 'My Subject', $message);
?>
</body>
</html>