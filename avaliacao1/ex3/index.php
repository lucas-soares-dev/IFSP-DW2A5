<?php

    include_once './Includes/header.php'; 

    $preco = $_GET['preco'];
?>
    <h1>Formulário</h1>

    <form>
        <div class="mb-3">
            <label for="url-link" class="form-label">Preço</label>
            <input type="number" value="<?=$preco ?? ''?>" class="form-control" id="url-link" name="preco" required>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <button type="reset" class="btn btn-warning">Limpar</button>
    </form>

<?php
if($preco) { 
    $cinco = ($preco * 1.05);    
?>

    <p>O preço informado é <strong>R$<?=$preco?></strong></p>
    <p>As condições de pagamento são:</p>
    <ul>
        <li>à vista: <strong>R$<?=$preco - ($preco * 0.05)?> <span style="color: green">(5% de desconto)</span></strong></li>
        <li>parcelado em 3x de <strong>R$<?=$preco / 3?></strong> totalizando <strong>R$<?=$preco?></strong></li>
        <li>parcelado em 5x de <strong>R$<?=($preco * 1.05) / 5?></strong> totalizando <strong>R$<?=$preco * 1.05?> <span style="color: red">(5% de acréscimo)</span></strong></li>
        <li>parcelado em 12x de <strong>R$<?=($preco * 1.10) / 12?></strong> totalizando <strong>R$<?=$preco * 1.10?> <span style="color: red">(10% de acréscimo)</span></strong></li>
        <li>parcelado em 18x de <strong>R$<?=($preco * 1.15) / 18?></strong> totalizando <strong>R$<?=$preco * 1.15?> <span style="color: red">(15% de acréscimo)</span></strong></li>
    </ul>


<?php } include_once './Includes/footer.php'; ?>