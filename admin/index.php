<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IG - Gestor</title>
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
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="has-fixed-sidenav">

    <header>
        <div class="navbar-fixed">
            <nav class="navbar yellow darken-2">
                <div class="nav-wrapper">
                    <div class="container">
                        <a href="#" class="brand-logo left"><img src="../img/logo.png" alt=""></a>
                        <div class="container">
                            <ul id="nav-mobile" class="right">
                                <li class="hide-on-med-and-down"><a href="../">Sair</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <ul class="sidenav sidenav-fixed yellow darken-2" style="transform: translateX(0%);">
            <li class="brown darken-3 valign-wrapper" style="height: 11%;">
                <a href="#">Gestor<i class="material-icons">spa</i></a>
            </li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header">Atendimento<i
                                class="material-icons chevron right">chevron_left</i></a>
                        <div class="collapsible-body">
                            <ul class="collapsible collapsible-accordion">
                                <li>
                                    <a href="atendimento/formAtendimentoAdmin.php" class="brown darken-3 white-text"><i class="material-icons left white-text">add</i>Novo atendimento</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><div class="divider"></div></li>
                    <li>
                        <a class="collapsible-header">Cadastro<i
                                class="material-icons chevron right">chevron_left</i></a>
                        <div class="collapsible-body">
                            <ul class="collapsible collapsible-accordion">
                                <li>
                                    <a href="#" class="collapsible-header brown darken-3 white-text">Cadastros
                                        realizados<i
                                            class="material-icons chevron right white-text">chevron_left</i></a>
                                    <div class="collapsible-body">
                                        <ul class="yellow lighten-4">
                                            <li><a href="cadastro/consulta/funcionarios.php">Funcionários<i class="material-icons">list</i></a></li>
                                            <li class="divider"></li>
                                            <li><a href="cadastro/consulta/statusAtendimento.php">Status de atendimento<i class="material-icons">list</i></a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="cadastro/consulta/perfis.php">Perfis<i class="material-icons">list</i></a></li>
                                            <li class="divider"></li>
                                            <li><a href="cadastro/consulta/tiposFuncionario.php">Tipos de funcionário<i class="material-icons">list</i></a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="cadastro/consulta/usuarios.php">Usuários<i class="material-icons">list</i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="collapsible-header brown darken-3 white-text">Novo cadastro<i
                                            class="material-icons chevron right white-text">chevron_left</i></a>
                                    <div class="collapsible-body">
                                        <ul class="yellow lighten-4">
                                            <li><a href="cadastro/cadastroFuncionario.php">Funcionário<i
                                                        class="material-icons">add</i></a></li>
                                            <li><a href="cadastro/cadastroStatusAtendimento.php">Status de
                                                    atendimento<i class="material-icons">add</i></a></li>
                                            <li><a href="cadastro/cadastroPerfil.php">Perfil<i
                                                        class="material-icons">add</i></a></li>
                                            <li><a href="cadastro/cadastroTipoFuncionario.php">Tipo de funcionário<i
                                                        class="material-icons">add</i></a>
                                            </li>
                                            <li><a href="cadastro/cadastroUsuario.php">Usuário<i
                                                        class="material-icons">add</i></a></li>
                                        </ul>
                                    </div>
                                </li>
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
                                    <a class="collapsible-header brown darken-3 white-text ">Atendimentos<i
                                            class="material-icons chevron right white-text">chevron_left</i></a>
                                    <div class="collapsible-body">
                                        <ul class="yellow lighten-4">
                                            <li><a href="cadastro/consulta/ligacoes.php">Ligações<i class="material-icons">call</i></a></li>
                                            <li><a href="#!">Mídias digitais<i class="material-icons">devices</i></a></li>
                                            <li><a href="#!">Presenciais<i class="material-icons">person</i></a></li>
                                            <li><a href="#!">Totais<i class="material-icons">list</i></a></li>
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

        $(".dale").click(function() {
            alert('oi');
        });
        $(".setor").click(function() {
            var setor = $(".setor:checked").attr("data-setor");

            $.ajax({

                url: 'controller/update/atualizaSenha.php',
                type: 'POST',
                dataType: 'html',
                data: {
                    'setor': setor
                },
                success: function(data) {
                    $('#lista-senhas').empty().html(data);
                }
            });
        });

        setInterval(function() {
            var setor = $(".setor:checked").attr("data-setor");

            $.ajax({

                url: 'controller/update/atualizaSenha.php',
                type: 'POST',
                dataType: 'html',
                data: {
                    'setor': setor
                },
                success: function(data) {
                    $('#lista-senhas').empty().html(data);
                }
            });

        }, 3000);
    });
    </script>

</body>

</html>