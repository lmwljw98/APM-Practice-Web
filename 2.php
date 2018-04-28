<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko">

<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Hello GET</title>
</head>

<body>
    <?php
    if(isset($_GET["name"])){
        echo "<p>Hello, " . $_GET["name"] . "</p>";
    }
    ?>
</body>
