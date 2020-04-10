<?php

require __DIR__. '/__connect_dp.php';
$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;
$sql = "DELETE FROM `adress_book` WHERE `sid`=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$sid]);




if(empty($_SERVER['HTTP_REFERER']))
    header('Location: date-list.php');
else
    header('Location: '.$_SERVER['HTTP_REFERER']);


