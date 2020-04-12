<?php

if(! isset($_SESSION)){
    session_start(); //啟動session功能 !->not 的意思
}

//方法2-----------------------------------------------------------

$user = [
        'shin'=>['nickname'=>'雪莉','pw'=>'1234'],
        'deer'=>['nickname'=>'安麗','pw'=>'5678'],
        'bill'=>['nickname'=>'雪莉','pw'=>'910'],
];
if(isset($_POST['account']) and isset($_POST['password'])){

}

//方法1-----------------------------------------------------------
//if (isset($_POST['account']) and isset($_POST['password'])){
//    if ($_POST['account']=='shelly' and $_POST['password']=='123'){
//        $_SESSION['loginUser']='shelly';
//        }
//}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php if(isset($_SESSION['loginUser'])):?>
<div>
    <?= $_SESSION['loginUser']?> ,你好
</div>
    <a href="a20200406-09-lognout.php">登出</a>
<?php else: ?>
<form action="" method="post">
    <input type="text" name="account" placeholder="account"><br>
    <input type="password" name="password" placeholder="password"><br>
    <input type="submit" class="">
</form>

<?php endif; ?>

</body>
</html>





