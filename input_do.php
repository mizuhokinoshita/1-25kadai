<?php require('dbconnect.php')?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>掲示板</title>
</head>
<body>
    <?php
    $message = $_POST['messages'];
    if (strlen($message) >= 1 && strlen($message) <= 200) {
        $statement = $db->prepare('INSERT INTO messages SET messages=?');
        $statement->execute(array($_POST['messages']));
        echo '投稿を送信しました';
    } else {
        echo '投稿エラー: 200文字以内で入力してください';
    }
    ?>
    <a href="index2.php">投稿一覧</a>
</body>
</html