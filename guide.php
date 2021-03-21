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

$sql = 'SELECT * FROM guideChecked';
$result = mysqli_query($link, $sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Гайд</title>
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
	<?php require 'header.php' ?>

	<div class="container-fluid mt-5 uop">
		<div class="col-10 mx-auto p-5 blue">
			<h1 class="mt-3"><b>Как выбрать выгодное расположение</b></h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p class="text-end">Автор: Менеджер</p>
		</div>

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



	<div class="container-fluid mt-5">
		<div class="col-8 p-5 mx-auto blue">
			<h1><b>Попробуйте написать свой гайд</b></h1>
			<p>Возможно именно ваш гайд станет тем самым толчком для начинающего предпринимателя</p>
			<form action="guideP.php" method="post">
				<div class="mb-3">
					<input class="form-control" type="text" aria-label="default input example" name="title" placeholder="Название гайда">
				</div>
				<div class="mb-3">
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="guideText" placeholder="Ваш текст"></textarea>
				</div>
				<div class="mb-3">
					<input class="form-control" type="text" aria-label="default input example" name="author" placeholder="Ваше имя">
				</div>
				<button name="send" type="submit" class="btn btn-light">Отправить</button>
			</form>
		</div>
	</div>


	<?php require 'footer.php' ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>