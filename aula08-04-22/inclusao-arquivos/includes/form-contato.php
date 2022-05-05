<form action="./actions/form-contato.php" method="POST">
    <div class="form-row">
        <div class="row">
            <div class="form-group col-md-6">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="name">
            </div>

            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
        </div>
    
        <div class="form-group mt-3">
            <label for="message">Mensagem</label>
            <textarea class="form-control" name="message" id="message" cols="30" rows="10"></textarea>
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="reset" class="btn btn-warning">Limpar</button>
        </div>
    </div>
</form>