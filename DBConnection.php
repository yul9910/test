<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>MySql-PHP 연결 테스트</title>
</head>
<body>

<?php
echo "MySql 연결 테스트<br>";

$db = mysqli_connect("test.devs", "root", "1234", "dbtest");

if($db){
    echo "connect : 성공<br>";
}
else{
    echo "disconnect : 실패<br>";
}

?>

</body>
</html>