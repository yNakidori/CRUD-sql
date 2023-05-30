<?php
session_start();
require 'dbcon.php';

if (isset($_POST['delete_produto'])) {
    $produto_id = mysqli_real_escape_string($con, $_POST['delete_produto']);

    $query = "DELETE FROM produtos WHERE id='$produto_id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Produto Removido com Exito";
        header("Location: index.php");
        exit(0);

    } else {
        $_SESSION['message'] = "Produto Não Pode Ser Removido";
        header("Location: index.php");
        exit(0);
    }
}

if (isset($_POST['update_produto'])) {
    $produto_id = mysqli_real_escape_string($con, $_POST['produto_id']);

    $produto = mysqli_real_escape_string($con, $_POST['produto']);
    $codb = mysqli_real_escape_string($con, $_POST['codb']);
    $precoc = mysqli_real_escape_string($con, $_POST['precoc']);
    $precov = mysqli_real_escape_string($con, $_POST['precov']);
    $embp = mysqli_real_escape_string($con, $_POST['embp']);

    $query = "UPDATE produtos SET  produto='$produto', codb='$codb', precoc='$precoc', precov='$precov', embp='$embp' 
    WHERE id='$produto_id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Produto Atualizado com Exito";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Produto Não Pode Ser Atualizado";
        header("Location: index.php");
        exit(0);
    }
}


if (isset($_POST['save_produto'])) {
    $produto = mysqli_real_escape_string($con, $_POST['produto']);
    $codb = mysqli_real_escape_string($con, $_POST['codb']);
    $precoc = mysqli_real_escape_string($con, $_POST['precoc']);
    $precov = mysqli_real_escape_string($con, $_POST['precov']);
    $embp = mysqli_real_escape_string($con, $_POST['embp']);

    $query = "INSERT INTO produtos (produto,codb,precoc,precov,embp) VALUES
     ('$produto','$codb','$precoc','$precov','$embp')";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['message'] = "Produto Adicionado com Exito";
        header("Location: produto-create.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Produto Não Pode Ser Adicionado";
        header("Location: produto-create.php");
        exit(0);
    }
}

?>