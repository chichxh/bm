<!DOCTYPE html>
<html>
<head>
	<title>Борьба с нелегальным бизнесом</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<style type="text/css">
		body {
			font-family: 'Montserrat', Arial, sans-serif;
			background-color: #fff;
			overflow-x: hidden;
			margin: 0;
		}
        a {
			color: #000;
			text-decoration: none;
			transition-duration: 0.3s;
		}
		a:hover {
			color: #c4c4c4;
		}
		h1 {
			font-size: 64px;
		}
		.white {
			background-color: #fff;
		}
		.yellow {
			background-color: #EDE8AB;
		}
	</style>
</head>
<body>
	<?php require 'header.php' ?>

	<div class="container mt-5">
		<div class="row">
			<p>Все мы прекрасно знаем что такое нелегальный бизнес и скорее всего даже встречались с проявлением такого явления. Но как же с ним бороться? Вы можете кинуть заявку сюда, если вы хотите чтобы таких случаев становилось меньше. Все анонимно. Давайте сделаем этот мир хоть немного лучше</p>
		</div>

		<div class="col-8 mx-auto mt-5 yellow p-5 col">
			<h1>Напишите нам</h1>
			<form action="guideP.php" method="post">
				<div class="mb-3">
					<input class="form-control" type="text" aria-label="default input example" name="title" placeholder="Вид их деятельности">
				</div>
				<div class="mb-3">
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="guideText" placeholder="Что они делают"></textarea>
				</div>
				<div class="mb-3">
					<input class="form-control" type="text" aria-label="default input example" name="author" placeholder="Лица, участвующие там (необязательно)">
				</div>
				<button name="send" type="submit" class="btn btn-light">Отправить</button>
			</form>
		</div>
	</div>

	<?php require 'footer.php' ?>
</body>
</html>