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

$sql = 'SELECT * FROM comm';
$result = mysqli_query($link, $sql);

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
	<style type="text/css">
		body {
			font-family: 'Montserrat', Arial, sans-serif;
		}
		.blue {
			background-color: #F2FAFE;
			padding: 10px;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
	<?php require 'header.php' ?>

	<div class="container mt-5">
		<div class="row">
			<h1>Здесь вы можете написать свои нужды чтобы ип могли отталкиваться от них</h1>

			<form action="thanks.php" method="post">
				<div class="mb-3">
					<label for="exampleFormControlTextarea1" class="form-label">Ваш текст</label>
					<input class="form-control" type="text" aria-label="default input example" name="comment">
				</div>
				<div class="mb-3">
					<label for="exampleFormControlTextarea1" class="form-label">Ваше имя/Название организации</label>
					<input class="form-control" type="text" aria-label="default input example" name="author">
				</div>
				<button name="send" type="submit" class="btn btn-light">Отправить</button>
			</form>
		</div>  		
	</div>

	<div class="container mt-5">
		<h1 class="mb-4">Список жалоб</h1>
		<?php while ($row = mysqli_fetch_array($result)): ?>
			<div class="row blue">
				<h6><?= $row['author']; ?> говорит: "<?= $row['comment']; ?>"</h6>
			</div>
		<?php endwhile; ?>
	</div>



	
	<div class="footer">
		<div class="container-fluid bg-light p-3 mt-5">
			<p>Сайт разработан командой "Бутылка Коламбии"</p>
		</div>
	</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>