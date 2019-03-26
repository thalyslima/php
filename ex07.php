<?php

$alt1 = 1.5;
$alt2 = 1.1;
$cont = 0;

while ($alt1 > $alt2) {
    $alt1 = $alt1 + 0.2;
    $alt2 = $alt2 + 0.3;
    $cont++;
}    
 
printf ("Foram necessários %d anos" . "\n", $cont);



