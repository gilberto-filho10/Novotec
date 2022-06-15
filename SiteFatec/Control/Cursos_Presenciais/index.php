<?php
session_start();
include("../../BD/conexao.php");
if (isset($_SESSION["login"]) == 1 || isset($_SESSION["loginFunc"]) == 1) {
    include("../../View/Header_Footer/headerloged.php");
} else {
    include("../../View/Header_Footer/header.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="../global.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="main-content">

        <div class="containerButtons">
            <a href="../Detalhes-Curso/logistica.php">
                <button class="cursoButton">
                    Logística Aeroportuária
                </button>
            </a>
            <a href="../Detalhes-Curso/gestao.php">
                <button class="cursoButton">
                    Gestão de Serviços
                </button>
            </a>
            <a href="../Detalhes-Curso/redes.php">
                <button class="cursoButton">
                    Redes de Computadores
                </button>
            </a>
        </div>
        <div class="containerButtons2">
            <a href="../Detalhes-Curso/ads.php">
                <button class="cursoButton">
                    Análise e Desenvolvimento de Sistemas
                </button>
            </a>
            <a href="../Detalhes-Curso/ge.php">
                <button class="cursoButton">
                    Gestão Empresarial
                </button>
            </a>
            <a href="../Detalhes-Curso/comex.php">
                <button class="cursoButton">
                    Comércio Exterior
                </button>
            </a>
        </div>
    </div>

    <footer>
    <?php require("../../View/Header_Footer/footer.php"); ?>
    </footer>

</body>

</html>

<script src="https://kit.fontawesome.com/650f3fb109.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>