<?php
require __DIR__. '/__connect_dp.php';

$stmt = $pdo->query("SELECT * FROM adress_book");

//$row = $stmt->fetch();-->拿取第一筆資料
$rows = $stmt->fetchAll();

//print_r($rows);
echo json_encode($rows);
