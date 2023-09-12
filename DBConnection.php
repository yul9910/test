<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>MySql-PHP 연결 테스트</title>
</head>
<body>

<?php
echo "MySql 연결 테스트 중입니다<br>";

$hostname = "test.devs";
$username = "root";
$password = "1234";
$database = "dbtest";

$db = mysqli_connect($hostname, $username, $password, $database);

if($db){
    echo "connect : 성공!!<br>";
}
else{
    echo "disconnect : 실패<br>";
}

?>

</body>
</html>