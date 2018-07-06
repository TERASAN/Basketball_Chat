<?php
$pdo = new PDO('mysql:host=localhost;dbname=basketball_chat;port=3306;charset=utf8','root','root');

$name = $_GET['name'];
$age = $_GET['age'];
$massage = $_GET['massage'];

$main_add = $pdo->prepare('INSERT INTO chat(name,age,massage) VALUES (?,?,?)');
$main_add->execute(array($name,$age,$massage));
?>
