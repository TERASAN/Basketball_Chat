<?php
$pdo = new PDO('mysql:host=localhost;dbname=basketball_chat;port=3306;charset=utf8','root','root');

$id = $_GET['id'];

$response_delete = $pdo->prepare('DELETE FROM response_chat WHERE id=? ');
$response_delete->execute(array($id));

?>
