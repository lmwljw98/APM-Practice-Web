<?php require "config.php" ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko">

<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Sign In Check</title>
</head>

<body>
    <?php
    if(!empty($_POST["id"]) && !empty($_POST["pw"])){
        $signin_sql = "INSERT INTO info (id, pw) VALUES ('" . $_POST["id"] . "', '" . $_POST["pw"] . "')";
        if(mysqli_query($link, $signin_sql)){
            echo "
            <script>
            alert('회원가입 성공! 로그인 페이지로 돌아갑니다.');
        	location.href = '/board/index.html';
            </script>
            ";
        }
        else{
            echo "
            <script>
            alert('이미 존재하는 아이디이거나 다른 오류입니다.');
        	window.history.back();
            </script>
            ";
        }

        mysqli_close($link);
        }
    else{
        echo "
        <script>
            alert('모든 항목을 채워주세요.');
            window.history.back();
        </script>
        ";
    }
    ?>
</body>
