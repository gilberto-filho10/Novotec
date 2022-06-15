<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FATEC - ID</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <style type="text/css">
        titulo {
            color: #555555;
            font-family: 'Dosis', sans-serif;
            font-size: 15px;
            line-height: 28.8px;
            vertical-align: baseline;
            letter-spacing: normal;
            word-spacing: 0px;
            margin: 0px;
            padding: 0px;
        }

        p {
            color: #555555;
            font-family: 'Dosis', sans-serif;
            font-size: 15px;
            line-height: 28.8px;
            vertical-align: baseline;
            letter-spacing: normal;
            word-spacing: 0px;
            margin: 0px;
            padding: 0px;
        }

        .carousel-item {
            min-height: 280px;
        }
    </style>
</head>

<header>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #666666">
            <div class="container-fluid">
                <a href="../../index.php" class="navbar-brand">
                    <img src="http://www.fatecid.com.br/cursos/img/logo.png" height="55" alt="FatecID">
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Cursos</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="item-de-menu">
                                <a class="dropdown-item" href="">Presenciais</a>
                                <a class="dropdown-item" href="">EAD</a>
                                <a class="dropdown-item" href="#">Iniciação científica</a>
                                <a class="dropdown-item" href="">Trabalho de graduação</a>
                                <a class="dropdown-item" href="https://www.vestibularfatec.com.br/home/" target="_black">Vestibular</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Comunicação</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Cursos e Processos Seletivos</a>
                                <a class="dropdown-item" href="#">Editais</a>
                                <a class="dropdown-item" href="#">Eventos</a>
                                <a class="dropdown-item" href="#">Fatec Acontece</a>
                                <a class="dropdown-item" href="../../PI--Site--FATEC-novotec/novotec/view/mainNovotec.html" target="_black">Novotec</a>
                                <a class="dropdown-item" href="#">TV Digital</a>
                                <a class="dropdown-item" href="#">Revista Reverte</a>
                                <a class="dropdown-item" href="#">Revista TECSci</a>
                                <a class="dropdown-item" href="#">Curso Pré Vestibular</a>
                                <a class="dropdown-item" href="#">Vestibular</a>
                                <a class="dropdown-item" href="#">Portarias</a>
                                <a class="dropdown-item" href="#">S.A.P.</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Setores</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="../../PI--Site--FATEC-Outros-Grupo4/site_fatec/pages/biblioteca.php">Biblioteca</a>
                                <a class="dropdown-item" href="#">Central de Informações</a>
                                <a class="dropdown-item" href="#">Congregação (ATAS)</a>
                                <a class="dropdown-item" href="#">Estágio Supervisionado</a>
                                <a class="dropdown-item" href="#">Secretaria Acadêmica</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">SIGA</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="https://siga.cps.sp.gov.br/aluno/login.aspx" target="_black">Aluno</a>
                                <a class="dropdown-item" href="https://siga.cps.sp.gov.br/fatec/login.aspx " target="_black">Professor</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Institucional</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Admistração</a>
                                <a class="dropdown-item" href="../../PI--Site--FATEC-Outros-Grupo4/site_fatec/pages/corpo-docente.php">Corpo Docente</a>
                                <a class="dropdown-item" href="manual_centro_paula_souza_gestao2019_atualizado.pdf">Manual de Identida Visual</a>
                                <a class="dropdown-item" href="#">Missão, Visão e Objetivo</a>
                                <a class="dropdown-item" href="../../PI--Site--FATEC-Outros-Grupo4/site_fatec/pages/pdi.php">PDI</a>
                                <a class="dropdown-item" href="../../PI--Site--FATEC-Outros-Grupo4/site_fatec/pages/institucional.php">Quem Somos</a>
                                <a class="dropdown-item" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/institucional/2017_39_deliberacao.pdf">Regime Disciplinar do Corpo Discente</a>
                                <a class="dropdown-item" href="http://www.fatecid.com.br/site/wp-content/uploads/downloads/secretaria/regimento-fatecs%202016.pdf">Regimento</a>
                                <a class="dropdown-item" href="#">WEBSAI</a>
                                <a class="dropdown-item" href="#">Guias de Comunicação Inclusiva</a>
                            </div>
                        </div>
                        <!--<a href="#" class="nav-item nav-link disabled" tabindex="-1">Area do Aluno</a> -->
                    </div>
                    <div class="navbar-nav ms-auto">
                        <!-- <a class="nav-item nav-link">Bem Vindo - Otavio</a> -->
                        <a href="login.php" class="nav-item nav-link"><button type="button" class="btn btn-danger">Area do Aluno</button></a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>