<?php include_once './Includes/header.php'; ?>
    <h1>Formulário</h1>

    <form action="./actions/action.php" method="POST">
        <div class="mb-3">
            <label for="titlePage" class="form-label">Título da página</label>
            <input type="text" class="form-control" id="titlePage" name="titlePage" required>
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">Corpo</label>
            <textarea class="form-control" name="body" id="body" cols="30" rows="10"></textarea>
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">Repetir o corpo?</label>
            <select class="form-control" name="repeaterBody">
                <option value="1">Não repetir</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
            </select>
        </div>

        <div class="row">
            <div class="col-6 mb-3">
                <label for="color-text" class="form-label">Cor do texto</label>
                <input type="color" class="form-control" id="color-text" name="colorText" required>
            </div>

            <div class="col-6 mb-3">
                <label for="color-background" class="form-label">Cor fundo</label>
                <input type="color" class="form-control" id="color-background" name="colorBackground" required>
            </div>
        </div>

        <div class="mb-3">
            <label for="url-link" class="form-label">URL da fonte</label>
            <input type="url" class="form-control" id="url-link" name="urlLink" required>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <button type="reset" class="btn btn-warning">Limpar</button>
    </form>

<?php include_once './Includes/footer.php'; ?>