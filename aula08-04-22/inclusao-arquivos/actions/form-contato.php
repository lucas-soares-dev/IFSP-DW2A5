<?php

$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
$message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_SPECIAL_CHARS);

$file = "../contatos/Contato_" . date("D_M_Y") . "_" . random_int(1, 999999999999) . ".txt";
$fileContent = "Nome: $name\nEmail: $email\nMensagem: $message";

file_put_contents($file, $fileContent);
header("Location: ../contato.php");