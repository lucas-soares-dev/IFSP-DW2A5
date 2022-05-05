<?php 
    include_once './Includes/header.php';

    $name = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_EMAIL);
    $color = filter_input(INPUT_GET, 'color', FILTER_SANITIZE_SPECIAL_CHARS);


?>  
    <style>
        body {
            background: <?= $color ?>;
        }
    </style>

    <h1>Destino GET</h1>
    <hr>

    <p>Nome informado: <?= $name ?></p>
    <p>Email: <?= $email ?></p>

    <div>
        <a href="praticando3.php?name=Lucas Soares&email=lucas@lucas.com&color=<?=$color?>">
            Nome: Lucas Soares Email: lucas@lucas.com
        </a>

        <br>

        <a href="praticando3.php?name=José Teste&email=jose@jose.com&color=<?=$color?>">
            Nome: José Teste Email: jose@jose.com
        </a>

        <br>

        <a href="praticando3.php?name=<?=$name?>&email=<?=$email?>&color=lightblue">
            Cor: azul claro
        </a>  

        <br>

        <a href="praticando3.php?name=<?=$name?>&email=<?=$email?>&color=red">
            Cor: vermelho
        </a>

        <br>

        <a href="praticando3.php?name=<?=$name?>&email=<?=$email?>&color=yellow">
            Cor: amarelo
        </a>  
    </div>

<?php include_once './Includes/footer.php'; ?>