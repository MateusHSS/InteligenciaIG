<?php
    include_once "../config/conexao.php";

    $usu = $_POST['user'];
    $pass = md5($_POST['pass']);

    $sql = $connect->prepare("SELECT * FROM usuario WHERE usuario = '$usu' AND senha = '$pass'");
    $sql->execute();

    $result = $sql->get_result();

    if($result->num_rows == 0){
        echo "<script type='text/javascript'>alert('Usuário ou senha incorretos!'); window.location.href='../index.php';</script>";
    }else{
        while($res = $result->fetch_assoc()){
            $_SESSION['perfil'] = $res['perfil'];
        }

        switch($_SESSION['perfil']){
            case 1:
                header('location: ../recepcao/');
            break;
            case 2:
                header('location: ../comercial/');
            break;
            case 3:
                header('location: ../admin/');
            break;
        }
    }



?>