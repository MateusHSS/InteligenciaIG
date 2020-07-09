<?php
    include_once "../../config/conexao.php";

    $descricao = $_POST['descricao'];
    
    $sql = $connect->prepare("INSERT INTO statusatendimento (descricao) VALUE ('$descricao')");
    $sql->execute();

    if($sql->affected_rows == 0){
        echo "<script type='text/javascript'>alert('Erro ao cadastrar status de atendimento!'); window.location.href='../cadastroStatusAtendimento.php';</script>";
    }else{
        header("location: ../cadastroStatusAtendimento.php");
    }


?>