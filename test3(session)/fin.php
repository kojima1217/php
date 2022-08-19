<?php 
require_once '../../selfphp/Encode.php';
session_start();
 ?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="POST" action="login.php">
    <?php print $_SESSION['email']; ?>
        <p>を登録しました。</p>
        <input type="submit" value="トップへ" />
    </form>
</body>

</html>