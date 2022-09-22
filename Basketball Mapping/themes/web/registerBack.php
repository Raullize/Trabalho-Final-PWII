<?php
session_start();
$lastupdated = date('Y-m-d H:i:s');
$pdo = new PDO('mysql:host=localhost;dbname=bd-sql','root','');

$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
if(isset($_POST['name'])){
    $sql = $pdo->prepare("INSERT INTO `user` VALUES (null,?,?,?,?)");
    $sql->execute(array($_POST['name'],$_POST['password'],$_POST['user'],$lastupdated));
    echo 'inserido com sucesso';
    
}
header('Location: loginto.php');
?>

