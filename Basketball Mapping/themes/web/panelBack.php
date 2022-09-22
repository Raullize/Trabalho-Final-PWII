<?php
$pdo = new PDO('mysql:host=localhost;dbname=bd-sql','root','');

$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
if(isset($_POST['submit'])){
    $sql = $pdo->prepare("INSERT INTO `teams` VALUES (null,?,?,?,?,?,?)");
    $sql->execute(array($_POST['name'],$_POST['contact'],$_POST['modality'],$_POST['gender'],$_POST['state'],$_POST['city']));
    echo 'inserido com sucesso';
    
}
header('Location: panelfront.php');
?>

