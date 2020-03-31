<?php
$a = isset($_GET['a'])?intval($_GET['a']):0;
?>

<form>

<!-- 1.php echo=> = -->
<!-- 2.?= $a ? $a前後要放空格 -->

    <input type="number" name="a" value="<?= $a ?>">
    <input type="submit" value="SUMIT">
</form>

<?php

$ss=intval($a/10);

switch ($ss){
    case 10:
    case 9:
        $g='A';
        break;
    case 8:
        $g='B';
        break;
    case 7:
        $g='C';
        break;
    case 6:
        $g='D';
        break;
    default:
        $g='F';
}
echo $g;




?>

<!-------------------------------------------if else-->

<?php
//
//if($a>=80){
//$s='A';
//
//} elseif($a>=70){
//    $s='B';
//} elseif($a>=60){
//    $s='C';
//
//}else{
//    $s='D';
//}
//
//echo $s;
//
//?>
