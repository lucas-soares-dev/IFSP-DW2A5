<?php
    $numbers = filter_input(INPUT_GET, 'numbers', FILTER_SANITIZE_SPECIAL_CHARS);
    $numbers = preg_replace('/[^0-9]/', ", ", $numbers);
    $arrayNumbers = explode(",", $numbers);
?>

<h1>Desafio #1</h1>
<h2>Ordenar sequências com delimitadores desconhecidos</h2>
<hr>

<p>Os números informados foram:</p>

<p><b><?php
    $digits = $arrayNumbers;
    array_splice($digits, count($digits) - 1, 0, ['e'] );
    echo implode(" ", $digits) 
?></b></p><br>

<p>Os números em ordem crescente são:</p>

<p><b><?php
    $crescente = $arrayNumbers;
    asort($crescente);
    array_splice($crescente, count($crescente) - 1, 0, ['e'] );
    echo implode(" ", $crescente) 
?></b></p>

<br>
<p>Os números em ordem decrescente são:</p>
<p><b><?php
    $decrescente = $arrayNumbers;
    krsort($decrescente);
    array_splice($decrescente, count($decrescente) - 1, 0, ['e'] );
    echo implode(" ", $decrescente) ?></b></p>
<br>




















<?php
    /*$numbers = filter_input(INPUT_GET, 'numbers', FILTER_SANITIZE_SPECIAL_CHARS);
    $numbers = preg_replace('/[^0-9]/', ", ", $numbers);
    $arrayNumbers = explode(",", $numbers);
    $arrayOrder = $arrayNumbers;

    
    $digit = $arrayNumbers;
    $crescent = $arrayOrder;

    asort($arrayOrder);
    
    krsort($arrayOrder);
    $decrecent = $arrayOrder;

    var_dump($decrecent);

    // adiciona o "e" no penultimo numero
    array_splice($crescent, count($crescent) - 1, 0, ['e'] );
    array_splice($decrecent, count($decrecent) - 1, 0, ['e'] );
    array_splice($digit, count($digit) - 1, 0, ['e'] );

    // converte array em string
    $crescent = implode(" ", $crescent);
    $decrecent = implode(" ", $decrecent);
    $digit = implode(" ", $digit);*/
?>

<!-- <h1>Desafio #1</h1>
<h2>Ordenar sequências com delimitadores desconhecidos</h2>
<hr>

<p>Os números informados foram:</p>

<p><b><?= $digit ?></b></p><br>

<p>Os números em ordem crescente são:</p>

<p><b><?= $crescent
?></b></p>

<br>
<p>Os números em ordem decrescente são:</p>
<p><b><?= $decrecent ?></b></p>
<br> -->