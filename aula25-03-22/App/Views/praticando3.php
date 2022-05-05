<style>
    img {
        max-width: 300px;
    }
</style>

<?php 
    include_once './Includes/header.php'; 

    $animals = [
        'cachorro' => 'http://s2.glbimg.com/cYa3pKAKIPidjKyGPuAd8T4Hd1I=/e.glbimg.com/og/ed/f/original/2017/08/21/dog-2570398_960_720.jpg',
        'gato' => 'https://super.abril.com.br/wp-content/uploads/2020/09/04-09_gato_SITE.jpg?quality=70&strip=info',
        'elefante' => 'https://static.mundoeducacao.uol.com.br/mundoeducacao/2022/01/elefante-africano-de-savana.jpg',
    ]
?>
    <h1>Praticando 3 - Animais</h1>
    <hr>

    <div class="d-flex">
        <!-- cachorro -->
        <a href="../Controller/Praticando/Praticando3.php?animal=cachorro&&image=<?= $animals['cachorro'] ?>">
            <img src="<?= $animals['cachorro'] ?>" alt="cachorro">
        </a>

        <!-- gato -->
        <a href="../Controller/Praticando/Praticando3.php?animal=gato&&image=<?= $animals['gato']?>">
            <img src="<?= $animals['gato'] ?>" alt="gato">
        </a>  

        <!-- elefante -->
        <a href="../Controller/Praticando/Praticando3.php?animal=elefante&&image=<?= $animals['elefante'] ?>">
            <img src="<?= $animals['elefante'] ?>" alt="elefante">
        </a>
    </div>

<?php include_once './Includes/footer.php'; ?>