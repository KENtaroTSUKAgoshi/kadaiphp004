<?php
//1. POSTデータ取得
$name   = $_POST['name'];
$email  = $_POST['email'];
$tel = $_POST['tel'];
$content    = $_POST['content']; //追加されています

//2. DB接続します
require_once('funcs.php');
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare('INSERT INTO gs_an_table(name,email,tel,content,indate)VALUES(:name,:email,:tel,:content,sysdate());');
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':tel', $tel, PDO::PARAM_INT);
$stmt->bindValue(':content', $content, PDO::PARAM_STR);
$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status == false) {
    sql_error($stmt);
} else {
    redirect('index.php');
}
