<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko">

<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>5</title>
</head>

<body>
    <?php
    if(isset($_POST["id"]) && isset($_POST["pw"])){
        if($_POST["pw"] == "password"){
            session_start();
            $_SESSION["id"] = $_POST["id"];
			echo "
			<script>
			location.href = '6.php';
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
    }
    ?>
</body>
