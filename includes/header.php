<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Página de Detalhes</title>
</head>

<style>
    body {

        background-color: #D1CAD7;
        color: black;

    }

    .dark-mode {
        background-color: #310051;
        color: black;
    }

    .light-mode {
        background-color: #D1CAD7;
        color: black;
    }
</style>

<button type="button" class="btn btn-dark" onclick="darkMode()"><strong>Modo Escuro</strong></button>
<button type="button" class="btn btn-light" onclick="lightMode()"><strong>Modo Claro</strong></button>
<script>
    function darkMode() {
        var element = document.body;
        var content = document.getElementById("DarkModetext");
        element.className = "dark-mode";
        content.innerText = "Dark Mode is ON";
    }
    function lightMode() {
        var element = document.body;
        var content = document.getElementById("DarkModetext");
        element.className = "light-mode";
        content.innerText = "Dark Mode is OFF";
    }
</script>

<body>