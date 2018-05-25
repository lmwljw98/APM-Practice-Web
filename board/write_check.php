<?php require "config.php" ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko">

<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Write Check</title>
</head>

<body>
    <?php session_start(); ?>
    <?php
    if(!empty($_POST["title"]) && !empty($_POST["content"])){
        $title = $_POST["title"];
        $name = $_SESSION['id'];
        $date = date("Y-m-d");
        $content = $_POST["content"];
        $sql = "INSERT INTO board (title, name, date, content) VALUES ('" . $title . "', '" . $name . "' , '" . $date . "', '" . $content . "')";

        if(mysqli_query($link, $sql)){
            echo "
            <script>
        	location.href = '/board/success.php';
            </script>
            ";
        }
        else{
            echo "
            <script>
            alert('Error. Invalid query.');
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
