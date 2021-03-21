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

$sql = 'SELECT * FROM guide';
$result = mysqli_query($link, $sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Проверка гайдов</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
	<style type="text/css">
		body {
			font-family: 'Montserrat', Arial, sans-serif;
			background-color: #fff;
			overflow-x: hidden;
		}
		.blue {
			background-color: #EDE8AB;
			padding: 10px;
			margin-bottom: 10px;
			border-radius: 5px;
		}
		.uop {
			height: 800px;
		}
		.form-control {
			border: none;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<?php while ($row = mysqli_fetch_array($result)): ?>
			<div class="row">
				<div class="col-10 mx-auto p-5 blue">
					<h1><b><?= $row['title']; ?></b></h1>
					<p><?= $row['guideText']; ?></p>
					<p class="text-end"><?= $row['author']; ?></p>
				</div>
			</div>
		<?php endwhile; ?>
	</div>

</body>
</html>