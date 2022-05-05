<?php
    $requestUri = explode("/", $_SERVER['REQUEST_URI']);
?>

<ul class="nav nav-pills">
    <li class="nav-item"><a href="./index.php" class="nav-link <?= end($requestUri) == 'index.php' ? 'active' : '' ?>">Início</a></li>
    <li class="nav-item"><a href="./sobre.php" class="nav-link <?= end($requestUri) == 'sobre.php' ? 'active' : '' ?>"">Sobre</a></li>
    <li class="nav-item"><a href="./faqs.php" class="nav-link <?= end($requestUri) == 'faqs.php' ? 'active' : '' ?>"">FAQs</a></li>
    <li class="nav-item"><a href="./contato.php" class="nav-link <?= end($requestUri) == 'contato.php' ? 'active' : '' ?>"">Contato</a></li>
</ul>