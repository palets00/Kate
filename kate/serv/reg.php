<?
require 'connect.php';

$login = $_POST['login'];
$pass = $_POST['pass'];
$conf = $_POST['conf'];

if ($pass === $conf){
    $user = mysqli_query($connect,"SELECT*from `users` where `login` = '$login'");
    $user = mysqli_fetch_assoc($user);
    if (!$user){
        $query = "INSERT INTO `users` (`login`, `pass`) VALUES ('$login', '$pass')";
        $res = mysqli_query($connect, $query);
        if (!$res){
            die('ОШибка');
        }
    }
    else{
        die('такой пользователь уже есть');
    }
}
else{
    die('Пароли не совпадают');
}
header('Location: ../index.php');
