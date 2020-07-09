<?php
    include_once "../../config/conexao.php";

    $descricao = $_POST['descricao-perfil'];
    
    $sql = $connect->prepare("INSERT INTO perfil(descricao) VALUES (?)");
    $sql->bind_param("s", $descricao);
    $sql->execute();

    if($sql->affected_rows == 0){
        echo "<script type='text/javascript'>alert('Erro ao cadastrar perfil!'); window.location.href='../cadastroPerfil.php';</script>";
    }else{
        header("location: ../../cadastroPerfil.php");
    }


?>