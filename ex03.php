<?php

$nome = "Thalys";
$sexo = "Masculino";
$idade = 25;

if($sexo == "Feminino" && $idade <= 25) {
    printf("%s ACEITA" . "\n", $nome);
} else {
    printf("%s NÃO ACEITA" . "\n", $nome);
}