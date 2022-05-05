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
    <h1>Container</h1>
    <hr>

    <form method="POST" action="./actions/index.php">
        <div class="mb-3 col-4">
            <label for="inicio" class="form-label">Início</label>
            <input type="inicio" class="form-control" id="inicio" name="inicio" required>
        </div>

        <div class="mb-3 col-4">
            <label for="final" class="form-label">Final</label>
            <input type="final" class="form-control" id="final" name="final" required>
        </div>

        <div class="mb-3 col-4">
            <label for="incremento" class="form-label">Incremento</label>
            <input type="incremento" class="form-control" id="incremento" name="incremento" required>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
        <button type="reset" class="btn btn-warning">Limpar</button>
    </form>
</body>
</html>