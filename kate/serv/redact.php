<?
require "connect.php";


$id = $_POST['id'];
$name = $_POST['name'] ?? '';
$cost = $_POST['cost'] ?? '';
$about = $_POST['about'] ?? '';
$weight = $_POST['weight'] ?? '';

if (empty($about)){
    mysqli_query($connect, "UPDATE `admin` set `name`='$name', `about` = '$about' where `id`='$id'");
}
else{
    mysqli_query($connect, "UPDATE `admin` set `name`='$name', `cost`='$cost', `about`='$about', `weight`='$weight' where `id`='$id'");
}
mysqli_query($connect, "UPDATE `admin` set `name`='$name' where `id`='$id'");
header("Location: ../adm.php");
?>