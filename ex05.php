<?php

$num = 5;

printf("Tabuada do número %d:" . "\n\n", $num);

for($i = 1; $i <= 10; $i++) {
    $res = $i * $num;
    printf("$i x $num = $res" . "\n");
}
