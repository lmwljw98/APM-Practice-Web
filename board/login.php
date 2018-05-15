<?php require "config.php" ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko">

<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Login Check</title>
</head>

<body>
    <?php
    if(isset($_POST["id"]) && isset($_POST["pw"])){
        $sql = "SELECT id, pw FROM info WHERE id LIKE '" . $_POST["id"] . "'";
        $result = mysqli_query($link, $sql);
        $row = $result->fetch_array(MYSQLI_BOTH);
        if($result->num_rows == 1 && $_POST["id"] == $row["id"] && $_POST["pw"] == $row["pw"]){
            session_start();
            $_SESSION["id"] = $_POST["id"];
			echo "
			<script>
			location.href = '/board/success.php';
			</script>
			";
        }
        else{
            echo "
            <script>
                alert('로그인 실패');
                window.history.back();
            </script>
            ";
        }
        mysqli_close($link);
    }
    ?>
</body>
