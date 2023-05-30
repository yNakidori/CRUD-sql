<?php
session_start();
?>
<?php include('includes/header.php'); ?>

<div class="container mt-5">

    <?php include('message.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> Registro de Produtos
                        <a href="index.php" class="btn btn-danger float-end">Voltar</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST">

                        <div class="mb-3">
                            <label>Nome do Produto</label>
                            <input type="text" name="produto" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Código de Barras</label>
                            <input type="text" name="codb" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Preço de Compra</label>
                            <input type="text" name="precoc" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Preço de Venda</label>
                            <input type="text" name="precov" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Tipo de Embalagem/Unidade de Medida:
                                (UN - Unidade, LT - Litro, KG - Quilogramas,
                                CX - Caixa e FD - Fardo) </label>
                            <input type="text" name="embp" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="save_produto" class="btn btn-primary">Salvar
                                Produto</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include('includes/footer.php'); ?>