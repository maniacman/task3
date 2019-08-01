<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<title>Homepage</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<a class="navbar-brand" href="#">Навигация</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="#">Главная<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Побульоним</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Расценки</a>
				</li>
			</ul>
		</div>
		<form class="form-inline col-md-2">
			<input class="form-control mr-sm-2" type="search" placeholder="Поиск" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
		</form>
		<a href="authorization.php" class="btn btn-secondary">Войти</a>
		<a href="registration.php" class="btn btn-info">Регистрация</a>
	</nav>

	<?php
	if (($_SESSION['auth']) == 'bingo')
	{
		echo 'Вы авторизованы' . '<br>';
		echo '<a href="exit.php" class="btn btn-secondary">Выйти</a>';
	}
	else
	{
		echo 'Авторизуйтесь или зарегистрируйтесь';	
	}
	?>

</body>
</html>