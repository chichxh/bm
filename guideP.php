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
    $query = "INSERT INTO guide (title, guideText, author) VALUES ('". $_POST['title'] ."', '". $_POST['guideText'] ."', '". $_POST['author'] ."')";
    $res = mysqli_query($link, $query);
}

header("Location: guide.php");
?>