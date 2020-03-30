<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
echo 5+1;
echo '<br>';
echo 7+12;

//1.一定要加分號;
//2.<br>要加入''否則會被當成敘述

//系統常數 常數都一定要大寫
echo PHP_VERSION. '<br>';
echo __DIR__. '<br>'; //磁碟所在的資料夾
echo __FILE__. '<br>';
echo __LINE__. '<br>';

//自訂常數

define('MY_CONST',30000);
echo MY_CONST. '<br>';
echo FALSE. '<br>'; //布林值不區分大小寫 //0
echo  true. '<br>'; //1

?>
</body>
</html>