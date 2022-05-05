<?php
    $number = filter_input(INPUT_GET, "number", FILTER_SANITIZE_NUMBER_INT);
    $tabuada = [];
    
    if(isset($number) && is_numeric($number)) {
        for($increment=1; $increment <= 10; $increment++) {
            $tabuada[] = (string) "$number x $increment = " . $number * $increment;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- scripts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body class="container">
    <h1>Tabuada</h1>
    <hr>

    <form method="GET">
        <div class="mb-3 col-4">
            <label for="number" class="form-label">Número</label>
            <input type="number" class="form-control" id="number" name="number" required>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
        <button type="reset" class="btn btn-warning">Limpar</button>
    </form>

    <?php 
        if(count($tabuada) > 0) { 
    ?>
        <hr>
        <h1>Tabuada do <?= $number ?></h1>

    <?php 
        foreach($tabuada as $item) {
           echo $item ."<br>";
        }   
    }
    ?>
</body>
</html>