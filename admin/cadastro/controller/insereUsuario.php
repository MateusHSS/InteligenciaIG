<?php
    include_once "../../config/conexao.php";

    $nome = $_POST['nome-user'];
    $user = $_POST['user'];
    $senha = md5($_POST['senha']);
    $perfil = $_POST['perfil'];

    $sql = $connect->prepare("INSERT INTO usuario(nome, usuario, senha, perfil) VALUES (?, ?, ?, ?)");
    $sql->bind_param("ssss", $nome, $user, $senha, $perfil);
    $sql->execute();

    if($sql->affected_rows == 0){
        echo "<script type='text/javascript'>alert('Erro ao cadastrar usuário!'); window.location.href='../cadastroUsuario.php';</script>";
    }else{
        
    }


?>