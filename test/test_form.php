<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>データの登録</title>
</head>
<body>
    <form method="POST" action="test_process.php">
        <div>
            <label for="id">ID:</label><br />
            <input id="id" type="text" name="id" size="25" maxlength="10" />
        </div>
        <div>
            <label for="title">タイトル:</label><br />
            <input id="title" type="text" name="title" size="35" maxlength="100" />
        </div>
        <div>
            <label for="publish">発売日:</label><br />
            <input id="publish" type="text" name="publish" size="25" maxlength="30" />
        </div>
        <div>
            <label for="price">価格:</label><br />
            <input id="price" type="text" name="price" size="6" maxlength="10" />円
        </div>
        <div>
            <label for="season">シーズン:</label><br />
            <input id="season" type="text" name="season" size="15" maxlength="255" />
        </div>
        <div>
            <input type="submit" value="登録" />
        </div>
    </form>
    
</body>
</html>