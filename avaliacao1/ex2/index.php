<?php include_once './Includes/header.php'; ?>
    <h1>Formulário</h1>

    <form action="./actions/action.php" method="POST">
        <div class="mb-3">
            <label for="url-link" class="form-label">URL de uma imagem</label>
            <input type="url" class="form-control" id="url-link" name="urlImage" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Mostrar</label>
            <select name="showImage" class="form-control">
                <option value="0">Inline</option>
                <option value="1">Background</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <button type="reset" class="btn btn-warning">Limpar</button>
    </form>


<?php include_once './Includes/footer.php'; ?>