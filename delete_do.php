<?php require('dbconnect.php'); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$id = $_REQUEST['id'];
$delete = $db->prepare('DELETE FROM messages WHERE id=?');
$delete->execute(array($id));
echo '削除しました'
?>
<a href="index2.php">投稿一覧</a>
</body>
</html>