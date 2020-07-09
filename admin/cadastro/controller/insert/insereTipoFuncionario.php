<?php
    include_once "../../config/conexao.php";

    $descricao = $_POST['descricao-tipo'];
    
    $sql = $connect->prepare("INSERT INTO tipofunc(descricao) VALUE (?)");
    $sql->bind_param("s", $descricao);
    $sql->execute();

    if($sql->affected_rows == 0){
        echo "<script type='text/javascript'>alert('Erro ao cadastrar tipo de funcionário!'); window.location.href='../cadastroTipoFuncionario.php';</script>";
    }else{
        header("location: ../../cadastroTipoFuncionario.php");
    }


?>