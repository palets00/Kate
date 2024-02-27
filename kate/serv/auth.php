<?
require 'connect.php';

$login = $_POST['login'];
$pass = $_POST['pass'];

$user = mysqli_query($connect,"SELECT*from `users` where `login` = '$login'");

$user = mysqli_fetch_assoc($user);
if (!empty($user)){
    session_start();
    $_SESSION = ['login'=>$user['login'], 'pass'=>$user['pass']];
}
else{
    die('Неверный логин или пароль');
}

header('Location: ../cart.php');
