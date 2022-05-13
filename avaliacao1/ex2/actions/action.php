<?php
    $urlImage = filter_input(INPUT_POST, 'urlImage', FILTER_VALIDATE_URL);
    $typeShowImage = filter_input(INPUT_POST, 'showImage');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliacao</title>

    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        <?php if($typeShowImage == 1) { ?>
            .background {
                background-image: url("<?= $urlImage ?>");
            }
        <?php } ?>

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
    <?php if($typeShowImage == 0) { ?>
        <div class="container">     
            <figure>
                <img src="<?= $urlImage ?>" alt="Image">
            </figure>
        </div>
    <?php } ?>
</body>
</html>