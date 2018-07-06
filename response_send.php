<?php
$pdo = new PDO('mysql:host=localhost;dbname=basketball_chat;port=3306;charset=utf8','root','root');

$name = $_GET['name'];
$age = $_GET['age'];
$massage = $_GET['massage'];
$hostid = $_GET['hostid'];

$response_add =$pdo->prepare('INSERT INTO response_chat(hostid,name,age,massage) VALUES (?,?,?,?)');
$response_add->execute(array($hostid,$name,$age,$massage));

?>
