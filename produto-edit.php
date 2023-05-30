<?php
session_start();
require 'dbcon.php';
?>
<?php include('includes/header.php'); ?>

<div class="container mt-5">

    <?php include('message.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> Editar Produto
                        <a href="index.php" class="btn btn-danger float-end">Voltar</a>
                    </h4>
                </div>
                <div class="card-body">

                    <?php
                    if (isset($_GET['id'])) {
                        $produto_id = mysqli_real_escape_string($con, $_GET['id']);
                        $query = "SELECT * FROM produtos WHERE id='$produto_id' ";
                        $query_run = mysqli_query($con, $query);

                        if (mysqli_num_rows($query_run) > 0) {
                            $produto = mysqli_fetch_array($query_run);
                            ?>


                            <form action="code.php" method="POST">
                                <input type="hidden" name="produto_id" value="<?= $produto['id'] ?>">

                                <div class="mb-3">
                                    <label>Nome do Produto</label>
                                    <input type="text" name="produto" value="<?= $produto['produto']; ?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Código de Barras</label>
                                    <input type="text" name="codb" value="<?= $produto['codb']; ?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Preço de Compra</label>
                                    <input type="text" name="precoc" value="<?= $produto['precoc']; ?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Preço de Venda</label>
                                    <input type="text" name="precov" value="<?= $produto['precov']; ?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Tipo de Embalagem/Unidade de Medida:
                                        (UN - Unidade, LT - Litro, KG - Quilogramas,
                                        CX - Caixa e FD - Fardo) </label>
                                    <input type="text" name="embp" value="<?= $produto['embp']; ?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="update_produto" class="btn btn-primary">Atualizar
                                        Produto</button>
                                </div>


                            </form>

                            <?php
                        } else {
                            echo "<h4>Nenhum Id encontrado</h4>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include('includes/footer.php'); ?>