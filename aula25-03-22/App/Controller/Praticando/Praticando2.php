<?php

$nota1 = filter_input(INPUT_POST, 'nota1', FILTER_VALIDATE_FLOAT);
$nota2 = filter_input(INPUT_POST, 'nota2', FILTER_VALIDATE_FLOAT);
$nota3 = filter_input(INPUT_POST, 'nota3', FILTER_VALIDATE_FLOAT);

$media = ($nota1 + $nota2 + $nota3) / 3;

if(!$media) {
    echo "Verifique os valores digitados";
    exit;
}

$message = "Com essa média o aluno está ";

if($media < 4) {
    $message .= "REPROVADO";
    $color = "red";
} else if(($media > 4) && ($media < 6)) {
    $message = "DE RECUPERAÇÃO";
    $color = "orange";
} else {
    $message = "APROVADO";
    $color = "green";
}

include_once '../../Views/Includes/header.php';
?>

<h1>Praticando - Calculadora média</h1>
<hr>
<p>Um aluno com as notas <strong><?= $nota1 . ", " . $nota2 . " e " . $nota3 ?></strong> tem a média igual a <strong><?= $media ?></strong></p>
<p>Com essa média o aluno está <strong style="color: <?= $color ?>; text-decoration: underline"><?= $message ?></strong></p>

<?php include_once '../../Views/Includes/footer.php'; ?>