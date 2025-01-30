<?php
try {
    $pdo = new PDO("mysql:dbname=loslogos", "root", "");
    // echo 'データベース接続成功！'; // 必要ない場合はコメントアウトしてもOK
} catch (PDOException $e) {
    echo 'データベース接続エラー: ' . $e->getMessage();
}
