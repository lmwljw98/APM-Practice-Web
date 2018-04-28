<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko">

<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Hello POST</title>
</head>

<body>
    <?php
    if(isset($_POST["id"]) && isset($_POST["pw"])){
        if($_POST["id"] == "admin"){
            echo "<p>Hello, " . $_POST["id"] . "</p>";
        }
        else{
            echo "<p>Bye Bye</p>";
        }
    }
    ?>
</body>
