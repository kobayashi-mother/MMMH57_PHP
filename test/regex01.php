<?php

$m = '0985-644952';
$mobile_re = "/^09\d{2}-?\d{3}-?\d{3}$/";

var_dump( preg_grep($mobile_re , [
    $m,
    '0913256-777'
]));
