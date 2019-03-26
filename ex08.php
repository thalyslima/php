<?php

$array = [1,2,3,4,5,6,7,8,9,10];
$array2 = [1,2,3,4,5,6,7,8,9,30];

$result = array_intersect($array, $array2);

print_r($result);


