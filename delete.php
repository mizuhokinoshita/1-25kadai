<?php require('dbconnect.php'); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>掲示板</title>
</head>
<body>
<?php
$id = $_REQUEST['id'];
if (is_numeric($id) && $id >= 1): ?>
    <?php
        $messages = $db->prepare('SELECT * FROM messages WHERE id=?');
        $messages->execute(array($id));
        $message = $messages->fetch();
        echo $message['messages'];
    ?>
    <a href="delete_do.php?id=<?php print($message['id']); ?>">本当に削除しますか？</a>
<?php endif; ?>
<?php
if (!is_numeric($id) || $id <= 0): ?>
    <?php echo '正しいURLを指定してください'; ?>
    <a href="index2.php">投稿一覧へ戻る</a>
<?php endif; ?>
<br>
</body>
</html>