<?php

require 'dbcon.php';
?>
<?php include('includes/header.php'); ?>

<div class="container mt-5">



    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> Visualizar Produto
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

                            <div class="mb-3">
                                <label>Nome do Produto</label>
                                <p class="form-control">
                                    <?= $produto['produto']; ?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Código de Barras</label>
                                <p class="form-control">
                                    <?= $produto['codb']; ?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Preço de Compra</label>
                                <p class="form-control">
                                    <?= $produto['precoc']; ?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Preço de Venda</label>
                                <p class="form-control">
                                    <?= $produto['precov']; ?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Tipo de Embalagem/Unidade de Medida:
                                    (UN - Unidade, LT - Litro, KG - Quilogramas,
                                    CX - Caixa e FD - Fardo) </label>
                                <p class="form-control">
                                    <?= $produto['embp']; ?>
                                </p>
                            </div>

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