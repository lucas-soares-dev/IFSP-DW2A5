<?php

require_once './classes/Contador.php';

$inicio = filter_input(INPUT_POST, "inicio", FILTER_SANITIZE_NUMBER_INT);
$final = filter_input(INPUT_POST, "final", FILTER_SANITIZE_NUMBER_INT);
$incremento = filter_input(INPUT_POST, "incremento", FILTER_SANITIZE_NUMBER_INT);

echo "<h1>Início: $inicio<br>Final: $final<br>Incremento: $incremento<br></h1>";

if($inicio > $final) {
    $numbers = Contador::execute($inicio, $final, $incremento, "decrescente");
} else {
    $numbers = Contador::execute($inicio, $final, $incremento, "crescente");
}

if(!is_array($numbers)) {
    header("Location: ../index.php");
}

foreach($numbers as $number) {
    echo "$number ";
}
