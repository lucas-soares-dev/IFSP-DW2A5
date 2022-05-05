<?php include_once './Includes/header.php'; ?>
    <h1>Praticando 1</h1>

    <form action="../Controller/Praticando/Praticando1.php" method="POST">
        <div class="mb-3">
            <label for="titlePage" class="form-label">Título da página</label>
            <input type="text" class="form-control" id="titlePage" name="titlePage" required>
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">Corpo</label>
            <textarea name="body" id="body" cols="30" rows="10"></textarea>
        </div>

        <div class="mb-3">
            <label for="color-text" class="form-label">Cor do texto</label>
            <input type="color" class="form-control" id="color-text" name="colorText" required>
        </div>

        <div class="mb-3">
            <label for="url-image" class="form-label">URL de uma imagem</label>
            <input type="url" class="form-control" id="url-image" name="urlImage" required>
        </div>

        <div class="mb-3">
            <label for="url-link" class="form-label">URL de link</label>
            <input type="url" class="form-control" id="url-link" name="urlLink" required>
        </div>

        <div class="mb-3">
            <label for="color-background" class="form-label">Cor de plano de fundo da página</label>
            <input type="color" class="form-control" id="color-background" name="colorBackground" required>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <button type="reset" class="btn btn-warning">Limpar</button>
    </form>


<?php include_once './Includes/footer.php'; ?>