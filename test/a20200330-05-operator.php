<?php


//||優先權比=要來的高
$c=20 || $d=3;
echo "\$c=$c, \$d=$d <br>";

($c=20) || ($d=3);
echo "\$c=$c, \$d=$d <br>";

// or優先權比=要來的低
$c=20 or $d=3;
echo "\$c=$c, \$d=$d <br>";