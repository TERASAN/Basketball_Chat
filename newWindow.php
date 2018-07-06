<?php
$pdo = new PDO('mysql:host=localhost;dbname=basketball_chat;port=3306;charset=utf8','root','root');
$id = $_GET['id'];

$sql=$pdo->prepare('SELECT * FROM chat WHERE id= ?');
$sql->execute(array($id));


 $chats=$sql->fetchAll();
 // var_dump($chats);
//
for($i=0; $i<count($chats); $i++){
    $sql2 =$pdo->query('SELECT * FROM response_chat WHERE hostid ='.$chats[$i]['id'].';');
    $children = $sql2->fetchAll();
    $chats[$i]['children'] = $children;
}

$json = json_encode($chats, JSON_UNESCAPED_UNICODE);
print($json);
?>
