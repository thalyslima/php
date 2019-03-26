<?php

$num = readline("Insira um número: ");

if($num == 0) {
    printf("\n" . "Execução finalizada! Número 0 foi digitado" . "\n");
}

while($num != 0) {
    $num = readline("Insira um número: ");

    if($num == 0) {
        printf("\n" . "Execução finalizada! Número 0 foi digitado" . "\n");
    }
}
