

<?php
$age=isset($_GET['age'])? intval($_GET['age']):0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if ($age>=18){
    echo 'welcom!!<br>';
} else{
     echo 'none<br>';
}
?>

<?php if ($age>=18){ ?>
    澳門首家線上賭場上線啦!!
<h2>恭喜已滿18歲</h2>

<?php } else{ ?>
請關閉視窗
<h2>很遺憾閣下年紀未到</h2>
<?php } ?>



</body>
</html>