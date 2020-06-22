<!DOCTYPE html>
<html>
<head>
	<title>tìm hiểu về biến trong PHP</title>
</head>
<body>
<h1>Tìm hiểu biến trong PHP</h1>
<?php
     $str = 'Hello World';
    echo $str;

    $str = 123;
    echo $str;

    //noi chuoi
    $str = 'hello';
    $str = $str.'world';
    $str .= 'world';
    echo $str;
   
    //khai bao hang so => bien gia tri khong thay doi
    const BASE_URL = 'https://gokisoft.com';
    echo BASE_URL;

    //cach 2 khai bao hang so
    define('PI', 3.14);
    echo PI;
?>
</body>
</html>