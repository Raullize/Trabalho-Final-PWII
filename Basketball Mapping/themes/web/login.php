<?php
session_start();
include('../../source/Boot/config.php');

if(empty($_POST['user']) || empty($_POST['password'])) {
    header('Location: loginto.php');
    exit();
}

$user = mysqli_real_escape_string($connection, $_POST['user']);
$password = mysqli_real_escape_string($connection, $_POST['password']);

$query = "select name from user where user = '{$user}' and password = '{$password}'";

$result = mysqli_query($connection,$query);

$row = mysqli_num_rows($result);

if($row == 1) {
    $user_bd = mysqli_fetch_assoc($result);
    $_SESSION['name'] = $user_bd['name'];
    header('Location: panelFront.php');
    exit();
} else {
    $_SESSION['unauthenticated'] = true;
    header('Location: loginto.php');
    exit();
}
?>