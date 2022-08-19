<?php 
session_start();
$_SESSION['email'] = $_POST['email'];
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

    <form method="POST" action="fin.php">
        <p>確認</p>
        IDは
        <?php print $_SESSION['email']; ?>
        <p>
            <input type="submit" value="ＯＫ" />
        </p>
    </form>
</body>

</html>