<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Entrar</title>
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
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body class='valign-wrapper center-align'>
    <div class="container center">
        <h4>Entrar</h4>
        <div class="row center">
            <div class="col m4 offset-m4 card grey-ligthen-4">
                <form class="col m12" action="controller/loga.php" method='POST'>
                    <div class="row">
                        <div class="input-field col m12">
                            <input id="user" type="text" class="validate" name='user'>
                            <label for="user">Usuário</label>
                        </div>
                        <div class="input-field col m12">
                            <input id="pass" type="password" class="validate" name='pass'>
                            <label for="pass">Senha</label>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Entrar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>