<?php include_once './Includes/header.php'; ?>
    <h1>Praticando 2 - Calculadora Média</h1>

    <form action="../Controller/Praticando/Praticando2.php" method="POST">
        <div class="mb-3">
            <label for="nota1" class="form-label">Nota 1:</label>
            <input type="number" class="form-control" id="nota1" name="nota1" step="0.5" required>
        </div>

        <div class="mb-3">
            <label for="nota2" class="form-label">Nota 2:</label>
            <input type="number" class="form-control" id="nota2" name="nota2" step="0.5" required>
        </div>

        <div class="mb-3">
            <label for="nota3" class="form-label">Nota 3:</label>
            <input type="number" class="form-control" id="nota3" name="nota3" step="0.5" required>
        </div>

        <button type="submit" class="btn btn-primary">Calcular Média</button>
        <button type="reset" class="btn btn-warning">Limpar</button>
    </form>


<?php include_once './Includes/footer.php'; ?>