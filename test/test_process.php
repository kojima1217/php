<?php 
require_once '../../DbManager.php';

try{
    $db = getDb();

    $stt = $db->prepare('INSERT INTO anime(id, title, publish, price, season) VALUES(:id, :title, :publish, :price, :season)');
    
    $stt->bindValue(':id', $_POST['id']);
    $stt->bindValue(':title', $_POST['title']);
    $stt->bindValue(':publish', $_POST['publish']);
    $stt->bindValue(':price', $_POST['price']);
    $stt->bindValue(':season', $_POST['season']);

    $stt->execute();

    header('Location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/test_from.php');
 
}catch(PDOException $e){
    die("エラーメッセージ：{$e->getMessage()}");
}

