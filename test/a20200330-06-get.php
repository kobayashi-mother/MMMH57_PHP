<?php

//isset?: 是查看a的query string參數有沒有設定，有設定的話就使用她的值
//沒有設定的話，$a=0，是怕其中一個值沒設定時會跳出notice
//intval 取整數，是怕用戶亂key非數值時會跳出notice
$a = isset($_GET['a']) ?intval($_GET['a']):0;
$b = isset($_GET['b']) ?intval($_GET['b']):0;

echo $a+$b;
echo '<br>';

echo '<table><tr>';
for ($i=1; $i<=$a; $i++){
    echo "<td>$i</td>";
}
echo '</tr></table>';

echo '<table>';
for ($i=1; $i<=$a; $i++){
    echo "<tr><td>$i</td></tr>";
}
echo '</table>';




