<?php
    session_start();

    include_once "../config/conexao.php";

    $id = $_GET['id'];

    $sql = $connect->prepare("SELECT *, DATE_FORMAT(data_atendimento, '%d/%m/%Y') AS data_atendimento FROM atendimento WHERE idatendimento = ?");
    $sql->bind_param("i", $id);
    $sql->execute();

    $resultDadosCliente = $sql->get_result();

    $resDadosCliente = $resultDadosCliente->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IG - Atendimento agendado</title>
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
    <link rel="stylesheet" href="../css/formAtendimento.css">
</head>

<body class="has-fixed-sidenav">

    <header>
        <div class="navbar-fixed">
            <nav class="navbar yellow darken-2">
                <div class="nav-wrapper">
                    <div class="container">
                        <a href="#" class="brand-logo left"><img src="../../img/logo.png" alt=""></a>
                        <ul id="nav-mobile" class="right">
                            <li class="hide-on-med-and-down"><a href="../">Cancelar</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

    </header>
    <main>
        <div class="container center">
            <form action="controller/insereFuncionario.php" method='post' class='center'>
                <div class="row">
                    <div class="input-field col l6">
                        <input id="nome" type="text" class="validate" name='nome'
                            onkeyup="this.value = this.value.toUpperCase();" value='<?php echo $resDadosCliente['nome_cliente'] ?>'>
                        <label for="nome">Cliente</label>
                    </div>
                    <div class="input-field col l3">
                        <input id="fone" type="text" class="validate fone" name='fone'
                            onkeyup="this.value = this.value.toUpperCase();" value='<?php echo $resDadosCliente['telefone1'] ?>'>
                        <label for="fone">Telefone 1</label>
                    </div>
                    <div class="input-field col l3">
                        <input id="fone2" type="text" class="validate fone" name='fone2'
                            onkeyup="this.value = this.value.toUpperCase();" value='<?php echo $resDadosCliente['telefone2'] ?>'>
                        <label for="fone2">Telefone 2 (Opcional)</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col l3">
                        <input id="cidade" type="email" class="validate" name='email'
                            onkeyup="this.value = this.value.toUpperCase();" value='<?php echo $resDadosCliente['cidade'] ?>'>
                        <label for="cidade">Cidade</label>
                    </div>
                    <div class="input-field col l6">
                        <input id="email" type="email" class="validate" name='email'
                        value='<?php echo $resDadosCliente['email'] ?>'>
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field col l3">
                        <input id="curso" type="text" class="validate" name='curso'
                            onkeyup="this.value = this.value.toUpperCase();" value='<?php echo $resDadosCliente['curso'] ?>'>
                        <label for="curso">Curso</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col l3">
                        <input id="contato" type="text" class="validate" name='contato'
                            onkeyup="this.value = this.value.toUpperCase();" value='<?php echo $resDadosCliente['origem_contato'] ?>'>
                        <label for="contato">Origem do contato</label>
                    </div>
                    <div class="input-field col l3">
                        <input id="dt-contato" type="text" class="validate" name='dt-contato'
                            onkeyup="this.value = this.value.toUpperCase();" value='<?php echo $resDadosCliente['data_atendimento'] ?>'>
                        <label for="dt-contato">Data do contato</label>
                    </div>
                    <div class="input-field col l6">
                        <textarea id="obs" type="text" class="materialize-textarea" name='obs'
                            onkeyup="this.value = this.value.toUpperCase();"></textarea>
                        <label for="obs">Observações</label>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="row">
                    <h5 class="left">Retorno</h5>
                </div>
                <div class="row">
                    <div class="input-field col l3">
                        <input id="dt-retorno" type="text" class="validate" name='dt-retorno'
                            onkeyup="this.value = this.value.toUpperCase();">
                        <label for="dt-retorno">Data</label>
                    </div>
                    <div class="input-field col l3">
                        <input id="hr-retorno" type="text" class="validate" name='hr-retorno'
                            onkeyup="this.value = this.value.toUpperCase();">
                        <label for="hr-retorno">Horário</label>
                    </div>
                    <div class="input-field col l3">
                        <input id="tipo-retorno" type="text" class="validate" name='tipo-retorno'
                            onkeyup="this.value = this.value.toUpperCase();">
                        <label for="tipo-retorno">Tipo</label>
                    </div>
                    <div class="input-field col l3">
                        <input id="stts-retorno" type="text" class="validate" name='stts-retorno'
                            onkeyup="this.value = this.value.toUpperCase();">
                        <label for="stts-retorno">Status</label>
                    </div>
                </div>
                <button class="btn waves-effect waves-light brown darken-3" type="submit" name="action">Finalizar
                    <i class="material-icons right">check</i>
                </button>
            </form>
        </div>

    </main>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"
        integrity="sha256-yE5LLp5HSQ/z+hJeCqkz9hdjNkk1jaiGG0tDCraumnA=" crossorigin="anonymous"></script>
    <script type='text/javascript'>
    $('.dropdown-trigger').dropdown({
        container: document.body

    });

    $(document).ready(function() {
        $('.collapsible').collapsible();

        $(".sidenav").sidenav();

        $(".fone").mask("(00)00000-0000");
    });
    </script>

</body>

</html>