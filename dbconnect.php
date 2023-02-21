<?php

$dsn = 'mysql:dbname=keijiban;host=localhost';
$user = 'root';
$password = '12020102';

try {
    $db = new PDO($dsn, $user, $password);
    // echo "接続成功\n";
} catch (PDOException $e) {
    // echo "接続失敗\n";
    echo $e->getMessage() . "\n";
}

// if(isset($_GET['messages'])){
//     $messages = $_GET['messages'];

//     $sql = 'SELECT name FROM messages WHERE messages = :messages';
//     $sth = $db -> prepare($sql);
//     $sth -> bindValue(':messages', $messages, PDO::PARAM_STR);
//     $sth -> execute();
//     $aryResult = $sth -> fetchAll(PDO::FETCH_COLUMN);
//     //データベースの取得結果配列をjson形式に変換
//     echo json_encode($aryResult);
// }else{
// }
$stmt = $db->query("SELECT messages FROM messages");
// SQL実行
$stmt->execute();


$data = $stmt->fetchAll(PDO::FETCH_COLUMN);

    header("Content-Type: application/json; charset=utf-8");
    
    echo json_encode($data,JSON_UNESCAPED_UNICODE);

// }

?>