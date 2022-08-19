<?php require_once '../selfphp/Encode.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>クッキー情報</title>
</head>
<body>
    <form method="POST" action="cookie2.php">
        <label for="email">メールアドレス：</label>
        <input id="email" type="text" name="email" size="40" value="<?=e($_COOKIE['email'] ?? '')?>">
        <!-- $_COOKIE[] クッキーを取得する
             A ?? B …null合体演算子(p108) Aが存在すればA 無ければBを表示
             $_COOKIE['email'] ?? '' クッキーが無ければ空白を表示しろという意味 -->
        <input type="submit" value="送信">
    </form>
</body>
</html>
