<?php
session_start();
require 'dbcon.php';

?>

<?php include('includes/header.php'); ?>

<div class="container mt-4">

    <?php include('message.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Detalhes dos Produto
                        <a href="produto-create.php" class="btn btn-primary float-end">Adicionar Produtos</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome do Produto</th>
                                <th>Código de Barras</th>
                                <th>Preço de Compra</th>
                                <th>Preço de Venda</th>
                                <th>Tipo de Embalagem</th>
                                <th>Gerenciar Item</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM produtos";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $produto) {

                                    ?>

                                    <tr>
                                        <td>
                                            <?= $produto['id']; ?>
                                        </td>
                                        <td>
                                            <?= $produto['produto']; ?>
                                        </td>
                                        <td>
                                            <?= $produto['codb']; ?>
                                        </td>
                                        <td>
                                            <?= $produto['precoc']; ?>
                                        </td>
                                        <td>
                                            <?= $produto['precov']; ?>
                                        </td>
                                        <td>
                                            <?= $produto['embp']; ?>
                                        </td>
                                        <td>
                                            <a href="produto-view.php?id=<?= $produto['id']; ?>"
                                                class="btn btn-info btn-sm">Visualizar</a>
                                            <a href="produto-edit.php?id=<?= $produto['id']; ?>"
                                                class="btn btn-success btn-sm">Editar</a>
                                            <form action="code.php" method="POST" class="d-inline">
                                                <button type="submit" name="delete_produto" value="<?= $produto['id']; ?>"
                                                    class="btn btn-danger btn-sm">Remover</a>

                                            </form>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                echo "<h5>Nenhum Registro Encontrado</h5>";
                            }
                            ?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>


</body>

</html>