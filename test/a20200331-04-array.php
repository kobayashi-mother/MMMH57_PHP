<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!--pre可使空格換行-->
<!--array有兩種寫法-->
<!--print_r可印出來-->
<!--var_dump也可印出 但比較仔細-->

<pre>
<?php


$a=array(1,2,3,4,'hello');
$b=[1,2,3,4,5,];

$a[]='happy'; // arrary push
$a[5]='end'; // arrary change



print_r($a);
var_dump($a);

?>
</pre>





</body>
</html>