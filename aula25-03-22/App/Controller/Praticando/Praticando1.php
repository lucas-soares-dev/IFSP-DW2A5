<?php

    $titlePage = filter_input(INPUT_POST, 'titlePage', FILTER_SANITIZE_SPECIAL_CHARS);
    $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_SPECIAL_CHARS);
    $colorText = filter_input(INPUT_POST, 'colorText', FILTER_SANITIZE_SPECIAL_CHARS);
    $urlImage = filter_input(INPUT_POST, 'urlImage', FILTER_VALIDATE_URL);
    $urlLink = filter_input(INPUT_POST, 'urlLink', FILTER_VALIDATE_URL);
    $colorBackground = filter_input(INPUT_POST, 'colorBackground', FILTER_SANITIZE_SPECIAL_CHARS);

    // echo "<pre>";
    // var_dump($titlePage);
    // var_dump($body);
    // var_dump($colorText);
    // var_dump($urlImage);
    // var_dump($urlLink);
    // var_dump($colorBackground);exit;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titlePage ?></title>

    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        .background {
            background-color: <?= $colorBackground ?>;
        }

        .text-color {
            color: <?= $colorText ?>;
        }

        figure {
            margin-left: 0;
        }

        img {
            width: 500px;
            margin-top: 4rem;
        }
    </style>
</head>
<body class="background">
    <div class="container">
        <h1 class="text-color"><?= $titlePage ?></h1>
        <hr>
        <p class="text-color"><?= $body ?></p>

        <figure>
            <img src="<?= $urlImage ?>" alt="Image">
        </figure>
        <a href="<?= $urlLink ?>" target="_blank"><?= $urlLink ?></a>
    </div>
</body>
</html>