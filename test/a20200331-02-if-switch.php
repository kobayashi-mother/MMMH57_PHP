<!--method="get"是預設值-->
<!--action=""傳遞給誰-->
<!--定要設置name 會跑到url上-->
<!--
<//?php echo  $a ?> = <//?= $a ?>
變數前後要留空格
-->

<?php
$a = isset($_GET['a'])?intval($_GET['a']) :0 ;
?>

<form action="" method="get">
    <input type="number" name="a" value="<?=  $a ?>">
    <input type="submit" value="SUBMIT">
</form>


SWITCH================<br>
<?php

$ss = intval($a/10);

switch ($ss){
    case 9:
     $g='A';
     break;
    case 8:
        $g='c';
        break;
    case 7:
        $g='d';
        break;
    case 6:
        $g='e';
        break;
    default:
        $g='f';

}
echo "$g <br>";


?>


IF=====================<br>
<?php



if($a>=80){
    $s='A';

} elseif($a>=70){
    $s='B';
} elseif($a>=60){
    $s='C';

}else{
    $s='D';
}

echo $s;

?>


