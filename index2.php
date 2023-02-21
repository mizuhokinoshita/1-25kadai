<?php require('dbconnect.php'); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
    <title>掲示板</title>
</head>
<body>
<header>
    <h1>掲示板</h1>
    <a class="post" href="input.html"><strong>新規投稿</strong></a>

   
</header>


    <?php
    $message = $db->query('SELECT * FROM messages order by modified DESC limit 15');
   
while ($message_ar = $message->fetch(PDO::FETCH_ASSOC)): ?>
         <?php print($message_ar['messages']); ?>
        <br>
        <?php print('<img src="images/p1.jpg" width="80px" height="80px">');?>
        <?php print('投稿ID:' . $message_ar['id']); ?> 
        <?php print('kinoshita:') ?>
        <?php print('投稿日時：' . $message_ar['modified']); ?> 
        <a href="delete.php?id=<?php print($message_ar['id']); ?>">削除</a>
        <br>
        <hr>
    <?php endwhile; ?>
</div>
</body>
</html>