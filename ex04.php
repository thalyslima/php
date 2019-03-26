<?php

$num1 = 5;
$num2 = 5;
$num3 = 5;

if($num1 != $num2 && $num1 != $num3 && $num2 != $num3) {
    printf("Triângulo escaleno" . "\n");
} else if ($num1 == $num2 && $num1 != $num3 || $num2 == $num3 && $num1 != $num2) {
    printf("Triângulo isóceles" . "\n");
    } else if ($num1 == $num2 && $num1 == $num3) {
        printf("Triângulo equilátero" . "\n");
}
