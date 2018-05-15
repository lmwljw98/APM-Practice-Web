<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko">

<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>My page</title>
</head>

<body>
    <?php session_start(); ?>
    <script>
        function msg(){
            var m = "<?= $_SESSION['id'] ?>";
            document.write("Username " + m + " Logged in.");
        }
    </script>
    <?php
    if(isset($_SESSION["id"])){
        echo "
        <script>
            msg();
        </script>
        ";
    }
    else{
        echo "
        <script>
            alert('로그인 필요');
            location.href = '/board/index.html';
        </script>
        ";
    }
    ?>
</body>
