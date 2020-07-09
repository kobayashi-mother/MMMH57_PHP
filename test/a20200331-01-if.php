
<?php

$a = isset($_GET['a'])?intval($_GET['a']):0;

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

