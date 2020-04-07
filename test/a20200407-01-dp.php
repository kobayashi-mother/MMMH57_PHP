<?php
require __DIR__. '/__connect_dp.php';

$stmt = $pdo->query("SELECT * FROM adress_book");
//$row = $stmt->fetch();-->
$rows = $stmt->fetchAll();


echo json_encode($rows);
