<?php include_once './Includes/header.php'; ?>
    <h1>Formulário</h1>

    <form action="../Controller/User/Create.php" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="name" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <button type="reset" class="btn btn-warning">Limpar</button>
    </form>


<?php include_once './Includes/footer.php'; ?>