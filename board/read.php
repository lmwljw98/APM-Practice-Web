<?php require "config.php" ?>
<?php session_start(); ?>
<?php
if(!isset($_GET["num"])){
    echo "Invalid value";
    die();
}
$num = $_GET["num"];
$sql = "SELECT name, title, date, content FROM board WHERE id LIKE " . $num;
$result = mysqli_query($link, $sql);
$row = $result->fetch_array(MYSQLI_BOTH);
if(empty($row["name"]) && empty($row["title"]) && empty($row["date"]) && empty($row["content"])){
    echo "Invalid value";
    die();
}
mysqli_close($link);
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title><?= $row["title"] ?></title>
</head>

<body>
    <div>
        <p class="title">제목 : <?= $row["title"] ?></p>
        <hr />
        <p class="name">작성자 : <?= $row["name"] ?></p>
        <hr />
        <p class="date">글 작성일 : <?= $row["date"] ?></p>
        <hr />
        <p>내용<br /></p>
        <p class="content">
            <?= nl2br($row["content"]) ?>
        </p>
        <hr />
    </div>
</body>
</html>
