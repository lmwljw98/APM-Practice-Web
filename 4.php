<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko">

<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>PHP</title>
    <style>
        table, th, td {
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
        echo "<p>PHP에서 1 + 1은 " ;
        echo 1 + 1;
        echo "입니다.</p><br>";
    ?>
    <table>
		<tr>
			<th>GET POST 차이점</th>
			<th>GET</th>
			<th>POST</th>
		</tr>
		<tr>
			<td>설명</td>
			<td>GET은 URL에 파라미터가 담김. 어떤 값을 가져오기에 적합</td>
			<td>POST는 파라미터가 숨겨져서 전달. 서버의 어떤 값을 변경할 때에 적합</td>
		</tr>
        <tr>
			<th>PHP에서 $_SERVER 변수에 담긴 정보/설명</th>
			<th colspan="2">출력값</th>
		</tr>
		<tr>
			<td>$_SERVER['SERVER_SOFTWARE'] : 서버의 소프트웨어 환경</td>
			<td colspan="2">
                <?php
                echo $_SERVER['SERVER_SOFTWARE'];
                ?>
            </td>
		</tr>
		<tr>
			<td>$_SERVER['SCRIPT_FILENAME'] : 실행되고 있는 파일의 전체경로.</td>
            <td colspan="2">
                <?php
                echo $_SERVER['SCRIPT_FILENAME'];
                ?>
            </td>
		</tr>
        <tr>
			<td>$_SERVER['DOCUMENT_ROOT'] : 사이트 루트의 물리적 경로.</td>
            <td colspan="2">
                <?php
                echo $_SERVER['DOCUMENT_ROOT'];
                ?>
            </td>
		</tr>
	</table>

</body>
