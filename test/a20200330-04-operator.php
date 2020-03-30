<?php

$a = 12;
$b= 10;

echo $a>$b;
echo '<br>';

echo $a<$b;
echo '<br>';

//條件運算子
echo $a>$b?'真':'假';
echo '<br>';
echo $a<$b?'true':'flase';
echo '<br>';

$b='aaa';
echo $b ?:'false';//如果$b是true 就輸出$b
//如果$b是false 就輸出'false'
