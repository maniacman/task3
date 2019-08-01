<?php
session_start();
$msg = [];

$login = htmlspecialchars(trim($_POST['login']));
$email = htmlspecialchars(trim($_POST['email']));
$password = htmlspecialchars(trim($_POST['password']));
$password = password_hash($password, PASSWORD_DEFAULT);

if ($login == '')
{
	$msg[] = 'Введите логин';
}

if ($email == '')
{
	$msg[] = 'Введите email';
}

if ($_POST['password'] == '')
{
	$msg[] = 'Введите пароль';
}

if (count($msg) > 0)
{
	$_SESSION['msg'] = $msg;
	header('Location: registration.php');
	exit;
}

$pdo = new PDO('mysql:host=localhost;dbname=users_learning;charset=utf8;', 'root', '');

$statement = $pdo->prepare("SELECT * FROM `allUsers` WHERE `login` = :login");
$values = ['login' => $login];
$statement->execute($values);
$users = $statement->fetchAll(PDO::FETCH_ASSOC);
if(count($users) > 0)
{
	$msg[] = 'Этот логин уже используется. Придумайте другой.';
}

$statement = $pdo->query("SELECT * FROM `allUsers` WHERE `email` = :email");
$values = ['email' => $email];
$statement->execute($values);
$users = $statement->fetchAll(PDO::FETCH_ASSOC);
if(count($users) > 0)
{
	$msg[] = 'Эта почта уже используется. Авторизуйтесь или введите другую.';
}

if ($_POST['password'] !== $_POST['password2'])
{
	$msg[] = 'Пароли не совпадают. Попробуйте ещё раз.';
}

if (count($msg) == 0)
{
	$query = $pdo->prepare("INSERT INTO `allUsers` (login, email, password) VALUES(:login, :email, :password)");
	$values = ['login' => $login, 'email' => $email, 'password' => $password];
	$query->execute($values);	
	header('Location: index.php');
	exit;
}
else
{
	$_SESSION['msg'] = $msg;
	header('Location: registration.php');
	exit;
}
