<?php
$subjects = [
    "Estrutura de Dados II",
    "Engenharia de Software II",
    "Administração e Sistemas de Informação",
    "Programação Web I",
    "Banco de Dados II"
];

$teachers = [
    "Fernando",
    "Julian",
    "Marciel",
    "Cleber",
    "Marco"
];

for ($i = 0; $i < 5; $i++) {
    echo "A matéria {$subjects[$i]} é ministrada pelo professor {$teachers[$i]}.\n";
}
