<?php
    include_once "../../../config/conexao.php";

    $nome = $_POST['nome-func'];
    $email = $_POST['email'];
    $tipo = $_POST['tipo-func'];

    echo $nome;
    echo $email;
    echo $tipo;

    $sql = $connect->prepare("INSERT INTO funcionario(nome, email, tipo) VALUES (?, ?, ?)");
    $sql->bind_param("sss", $nome, $email, $tipo);
    $sql->execute();

    if($sql->affected_rows == 0){
        echo "<script type='text/javascript'>alert('Erro ao cadastrar funcionário!'); window.location.href='../cadastroFuncionario.php';</script>";
    }else{
        header("location: ../../cadastroFuncionario.php");
    }


?>