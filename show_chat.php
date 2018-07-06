<?php
$pdo = new PDO('mysql:host=localhost;dbname=basketball_chat;port=3306;charset=utf8','root','root');
$sql=$pdo->query('SELECT * FROM chat;');

$chats=$sql->fetchAll();

for($i=0; $i<count($chats); $i++){
    $sql =$pdo->query('SELECT * FROM response_chat WHERE hostid ='.$chats[$i]['id'].';');
    $children = $sql->fetchAll();
    $chats[$i]['children'] = $children;
}

$json = json_encode($chats, JSON_UNESCAPED_UNICODE);
print($json);
?>
