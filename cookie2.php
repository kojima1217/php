<?php setcookie('email', $_POST['email'], time() + (60 * 60 * 24 * 90)); ?>
<!-- 'email'：名前(キー)　　$_POST['email']：内容(値)　　time()+…:有効期限　time()関数は現在の時刻 -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>クッキー情報</title>
</head>
<body>
    クッキーを保存しました。
</body>
</html>