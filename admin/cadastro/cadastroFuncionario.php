<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IG - Cadastro de funcionário</title>
    <!--ICONS-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css"
        integrity="sha256-13EKEXRsynh3cmmNF1dlW6uvoC1SZVaW94bIHZQJoMU=" crossorigin="anonymous" />

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
        integrity="sha256-OweaP/Ic6rsV+lysfyS4h+LM6sRwuO3euTYfr6M124g=" crossorigin="anonymous" />

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"
        integrity="sha256-U/cHDMTIHCeMcvehBv1xQ052bPSbJtbuiw4QA9cTKz0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="has-fixed-sidenav">

    <header>
        <div class="navbar-fixed">
            <nav class="navbar yellow darken-2">
                <div class="nav-wrapper">
                    <div class="container">
                        <a href="#" class="brand-logo left"><img src="../../img/logo.png" alt=""></a>
                        <div class="container">
                            <ul id="nav-mobile" class="right">
                                <li class="hide-on-med-and-down"><a href="#">Sair</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <ul class="sidenav sidenav-fixed yellow darken-2" style="transform: translateX(0%);">
            <li class="brown darken-3 valign-wrapper" style="height: 11%;">
                <a href="../">Gestor<i class="material-icons">spa</i></a>
            </li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header">Cadastro<i
                                class="material-icons chevron right">chevron_left</i></a>
                        <div class="collapsible-body">
                            <ul class="brown darken-3">
                                <li><a href="cadastroFuncionario.php">Funcionário</a></li>
                                <li><a href="cadastroStatusAtendimento.php">Status de atendimento</a></li>
                                <li><a href="cadastroPerfil.php">Perfil</a></li>
                                <li><a href="cadastroTipoFuncionario.php">Tipo de funcionário</a></li>
                                <li><a href="cadastroUsuario.php">Usuário</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="collapsible-header">Estatísticas<i
                                class="material-icons chevron right">chevron_left</i></a>
                        <div class="collapsible-body">
                            <ul class="collapsible collapsible-accordion">
                                <li>
                                    <a class="collapsible-header brown darken-3 white-text">Atendimentos<i
                                            class="material-icons chevron right white-text">chevron_left</i></a>
                                    <div class="collapsible-body">
                                        <ul class="yellow lighten-4">
                                            <li><a href="#!">Ligação</a></li>
                                            <li><a href="#!">Presencial</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="collapsible-header brown darken-3 white-text">Cadastros realizados<i
                                            class="material-icons chevron right white-text">chevron_left</i></a>
                                    <div class="collapsible-body">
                                        <ul class="yellow lighten-4">
                                            <li><a href="#!">Funcionários</a></li>
                                            <li><a href="#!">Status de atendimento</a></li>
                                            <li><a href="#!">Perfis</a></li>
                                            <li><a href="#!">Tipos de funcionários</a></li>
                                            <li><a href="cadastro/cadastroUsuario.php">Usuários</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="divider"></li>
                </ul>
            </li>
        </ul>

    </header>

    <main>
        <div class="container">
            <h4 class='center'>Funcionário</h4>
            <form action="controller/insert/insereFuncionario.php" method='post' class='center'>
                <div class="row">
                    <div class="input-field col l6">
                        <input id="nome-func" type="text" class="validate" name='nome-func'
                            onkeyup="this.value = this.value.toUpperCase();">
                        <label for="nome-func">Nome completo</label>
                    </div>
                    <div class="input-field col l6">
                        <input id="email" type="email" class="validate" name='email'>
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field col l6">
                        <select name='tipo-func' id='tipo-func'>
                            <option value="" disabled selected>Tipo</option>
                            <?php 
                                include_once "../config/conexao.php";

                                $sqlPerfil = $connect->prepare("SELECT * FROM tipofunc");
                                $sqlPerfil->execute();
                                $resultPerfil = $sqlPerfil->get_result();

                                while($resPerfil = $resultPerfil->fetch_assoc()){
                                    ?>
                            <option value="<?php echo $resPerfil['idtipoFunc'] ;?>"><?php echo $resPerfil['descricao']?>
                            </option>
                            <?php
                                }
                            ?>
                        </select>
                        <label>Tipo</label>
                    </div>
                </div>
                <button class="btn waves-effect waves-light brown darken-3" type="submit" name="action">Cadastrar
                    <i class="material-icons right">check</i>
                </button>
            </form>

        </div>
    </main>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js">
    </script>
    <script type='text/javascript'>
    $('.dropdown-trigger').dropdown({
        container: document.body

    });

    $(document).ready(function() {
        $('.collapsible').collapsible();

        $(".sidenav").sidenav();

        $('select').formSelect();

        $('#confirma-senha').blur(function() {
            if ($('#confirma-senha').val() != '') {
                if (!validaSenhas()) {
                    $("#confirma-senha").removeClass('valid');
                    $("#confirma-senha").addClass('invalid');
                } else {
                    $("#confirma-senha").removeClass('invalid');
                    $("#confirma-senha").addClass('valid');
                }
            }
        });

        $('#senha').blur(function() {
            if ($('#senha').val() != '') {
                if (!validaSenhas()) {
                    $("#confirma-senha").removeClass('valid');
                    $("#confirma-senha").addClass('invalid');
                } else {
                    $("#confirma-senha").removeClass('invalid');
                    $("#confirma-senha").addClass('valid');
                }
            }
        });

        function validaSenhas() {
            var senha = $('#senha').val();
            var confirma = $('#confirma-senha').val();

            if (senha == confirma) {
                return true
            } else {
                return false
            }
        }
    })
    </script>

</body>

</html>