<?php

$db_host = 'localhost';
$db_name = 'prj57';
$db_user = 'root';
$db_pass = '';

$dsn = sprintf('mysql:host=%s;dbname=%s;charset=utf8', $db_host, $db_name);

$pdo_options = [
    //錯誤模式設定成例外
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    //輸出的資料時會變成關聯式陣列
    PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC,
    //輸出的資料的語法
    PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"
];


//如果沒有以下偵錯的話程式會停下來
try{
    $pdo = new PDO($dsn, $db_user, $db_pass, $pdo_options);
} catch (PDOExeption $ex){
    echo 'Ex:'. $ex->getMessage();
}
