<?php
    include_once "../../../config/conexao.php";

    $nome = $_POST['nome'];
    $fone = $_POST['fone'];
    $consultor = $_POST['consultor'];
    $tipoAtendimento = $_POST['tipo_atendimento'];
    $tipoContato = 1;

    $sql = $connect->prepare("INSERT INTO atendimento (nome_cliente, telefone1, consultor, tipo_atendimento, tipo_contato, data_atendimento) VALUES (?, ?, ?, ?, ?, NOW())");
    $sql->bind_param("ssiii", $nome, $fone, $consultor, $tipoAtendimento, $tipoContato);
    $sql->execute();

    if($sql->affected_rows <= 0){
        echo "<script type='text/javascript'>alert('Erro ao incluir atendimento!');window.location.href='../../../'");
    }else{
        header("location: ../../../");
    }


?>