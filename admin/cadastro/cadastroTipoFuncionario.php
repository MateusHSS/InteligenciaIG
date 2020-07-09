<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IG - Cadastro de tipo de funcionário</title>
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
                                            <li><a href="#!" class="black-text">Ligação</a></li>
                                            <li><a href="#!" class="black-text">Presencial</a></li>
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
            <h4 class='center'>Tipo de funcionário</h4>
            <form action="controller/insert/insereTipoFuncionario.php" method='post' class='center'>
                <div class="row">
                    <div class="input-field col l12">
                        <input id="descricao-tipo" type="text" class="validate" name='descricao-tipo'
                            onkeyup="this.value = this.value.toUpperCase();">
                        <label for="descricao-tipo">Descrição</label>
                    </div>
                </div>
                <div class="row">
                    <button class="btn waves-effect waves-light brown darken-3" type="submit" name="action">Cadastrar
                        <i class="material-icons right">check</i>
                    </button>
                </div>
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
    })
    </script>

</body>

</html>