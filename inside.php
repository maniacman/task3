<?php
session_start();
$msg = [];

$login = htmlspecialchars(trim($_POST['login']));
$password = htmlspecialchars(trim($_POST['password']));

if ($login == '')
{
	$msg[] = 'Введите логин';
}

if ($_POST['password'] == '')
{
	$msg[] = 'Введите пароль';
}

if (count($msg) > 0)
{
	$_SESSION['msg'] = $msg;
	header('Location: authorization.php');
	exit;
}

$pdo = new PDO('mysql:host=localhost;dbname=users_learning;charset=utf8;', 'root', '');

$statement = $pdo->query("SELECT * FROM `allUsers` WHERE `login` = :login");
$values = ['login' => $login];
$statement->execute($values);
$users = $statement->fetchAll(PDO::FETCH_ASSOC);
$hash = $users[0][password];
if((password_verify($password, $hash)))
{
	$_SESSION['auth'] = 'bingo';
	header('Location: index.php');
	exit;
}
else
{
	$msg[] = 'Проверьте правильность пароля';
	$_SESSION['msg'] = $msg;
	header('Location: authorization.php');
	exit;
}

