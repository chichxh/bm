<?php

$database = 'bm';
$user = 'root';
$password = 'root';
$host = 'localhost';

$mysqli = new mysqli($host, $user, $password, $database);

$link = mysqli_connect($host, $user, $password, $database);

if ($link == false){
	print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}


if (isset($_POST['send'])) {
    $queryDost = "INSERT INTO comm (comment, author, district) VALUES ('". $_POST['comment'] ."', '". $_POST['author'] ."', 
    '". $_POST['district'] ."')";
    $resDost = mysqli_query($link, $queryDost);
}

header("Location: form.php");
?>