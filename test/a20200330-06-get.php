<?php

//isset+?: 是查看a的query string參數有沒有設定，有設定的話就使用她的值
//沒有設定的話，$a=0
$a = isset($_GET['a']) ?$_GET['a']:0;
$b = isset($_GET['b']) ?$_GET['b']:0;

echo $a+$b;
echo '<br>';

echo '<table><tr>';
for ($i=1; $i<=$a; $i++){
    echo "<td>$i</td>";
}
echo '</tr></table>';

echo '<table><tr>';
for ($i=1; $i<=$a; $i++){
    echo "<tr><td>$i</td></tr>";
}
echo '</tr></table>';