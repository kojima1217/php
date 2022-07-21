<?php 
require_once '../DbManager.php';

// 教科書p440
try{
    $db = getDb();// データベースの情報を取得

    $stt = $db->prepare('INSERT INTO book(isbn, title, price, publish, published) VALUES(:isbn, :title, :price, :publish, :published)');
    // ''(文字、SQL) INSERT INTO(追加する)  book(テーブル) VALUES(追加する値)
    // :isbnなどの:(セミコロン)のことを プレイスホルダー（後から文字に置き換える目印）

    $stt->bindValue(':isbn', $_POST['isbn']);
    $stt->bindValue(':title', $_POST['title']);
    $stt->bindValue(':price', $_POST['price']);
    $stt->bindValue(':publish', $_POST['publish']);
    $stt->bindValue(':published', $_POST['published']);

    $stt->execute();// SQLを実行する

    header('Location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/insert_from.php');
    // p374に解説あり
    // 指定したURLにリダイレクトする
    // SQLを実行が終わったらデータを送信したユーザーに「登録完了しました」と表示したりトップページにリダイレクトさせる

}catch(PDOException $e){
    die("エラーメッセージ：{$e->getMessage()}");
}

