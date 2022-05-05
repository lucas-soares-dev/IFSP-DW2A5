<?php

$animal = filter_input(INPUT_GET, 'animal', FILTER_SANITIZE_SPECIAL_CHARS);
$imageUrl = filter_input(INPUT_GET, 'image', FILTER_VALIDATE_URL);

if(!$animal || !$imageUrl) {
    die("Verifique se os dados enviados são válidos");
}

$messages = [
    'gato' => 'O gato é um mamífero da família dos felídeos.',
    'cachorro' => 'O cachorro é um mamífero da família dos canídeos.',
    'elefante' => 'O elefante é um mamífero da família dos proboscídeos.',
];

$message = $messages[$animal];

include_once '../../Views/Includes/header.php';
?>

<h1>Praticando - Animais</h1>
<hr>
<?php
    if(strlen($message) > 0) {
        echo "<p>Você clicou no <strong>$animal</strong>.</p>";
        echo "<p>$message</p>";
    } ?>
<img src="<?= $imageUrl ?>" alt="<?= $animal ?>">

<?php include_once '../../Views/Includes/footer.php'; ?>