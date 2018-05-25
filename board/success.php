<?php require "config.php" ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>게시판</title>
	<style>
	  table {
	    width: 100%;
	    border: 1px solid #444444;
	  }
	  th, td {
	    border: 1px solid #444444;
	  }
	</style>
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
		$sql = "SELECT id, name, title, date, content FROM board ORDER BY id DESC";
		$result = mysqli_query($link, $sql);
        echo "
        <script>
            msg();
        </script>
        ";
		mysqli_close($link);
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
	<div>
		<table>
			<tr>
				<th class="id">글 번호</th>
				<th class="title">제목</th>
				<th class="name">작성자</th>
				<th class="date">글 작성일</th>
			</tr>
			<?php
			for($i = 0; $i < $result->num_rows; $i++){
				$row = $result->fetch_array(MYSQLI_BOTH);
			?>
			<tr>
				<td class="id"><?= $row["id"] ?></td>
				<td class="title"><a href="read.php?num=<?=$row["id"]?>"> <?= $row["title"] ?></a></td>
				<td class="name"><?= $row["name"] ?></td>
				<td class="date"><?= $row["date"] ?></td>
			</tr>
			<?php } ?>
		</table>
	</div>
	<form action="/board/write.php">
		<input type="submit" value="글쓰기" />
	</form>

</body>
