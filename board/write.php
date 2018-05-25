<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko">

<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>글 작성</title>
</head>
<body>
	<?php session_start(); ?>
	<?php
	if(!isset($_SESSION["id"])){
		echo "
        <script>
            alert('로그인 필요');
            location.href = '/board/index.html';
        </script>
        ";
	}
	?>
	<div id="write">
		<form action="write_check.php" method="post">
			<p>제목 <input type="text" name="title" size="40"></p>
			<p>내용</p>
			<textarea cols="50" rows="20" name="content"></textarea> <br>
			<input type="submit" value="완료">
		</form>
	</div>
</body>
</html>
