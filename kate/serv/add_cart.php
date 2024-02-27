<?
require "connect.php";
$arr = mysqli_query($connect, "SELECT*FROM `admin`");
$arr= mysqli_fetch_all($arr);

$mass = [];
foreach($arr as $elem){
    if (empty($elem[2])){
        continue;
    }
    else{
        $mass[] = [
            'name'=> $elem[1],
            'about'=>$elem[4],
            'cost'=>intval($elem[2]),
            'count'=>1,
                ];
    }
}
$mass[0]['img'] = 'assets/pangasius.png';
$mass[1]['img'] = 'assets/утка.png';
$mass[2]['img'] = 'assets/ягненок.png';
$mass[3]['img'] = 'assets/индейка.png';
$mass[4]['img'] = 'assets/пеперони (1).png';
$mass[5]['img'] = 'assets/четыресыра.png';
$mass[6]['img'] = 'assets/греческая.png';
$mass[7]['img'] = 'assets/карбонара.png';


session_start();
if(!empty($_SESSION['cart'])){
    $a = 0;
    foreach($_SESSION['cart'] as $elem){
        if ($elem['name'] == $mass[$_GET['id']-1]['name']){
            $_SESSION['cart'][$a]['count'] = $elem['count']+1;
            die(header('Location: ../cart.php'));
        }
        $a = $a+1;
    }
}
$_SESSION['cart'][] = $mass[$_GET['id']-1];
header('Location: ../cart.php');

?>