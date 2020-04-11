<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<pre>


<?php

$a=[
    'a'=>'apple',
    'b'=>'banana',
    'a'=>'cat',
    'd'=>'dog',
];

foreach($a as $a=>$k){
    echo "$a => $k <br>";
}

?>
</pre>
</body>
</html>