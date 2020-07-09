<?php
    include_once "../../../config/conexao.php";

    $nomeCliente = $_POST['nome'];
    $fone1 = $_POST['fone'];
    $fone2 = $_POST['fone2'];
    $cidade = $_POST['cidade'];
    $email = $_POST['email'];
    $curso =$_POST['curso'];
    $origem = $_POST['contato'];
    $consultor = $_POST['atendente'];
    $tipoAtend = 3;
    $dataRetorno = $_POST['dt_retorno'];

    $sql = $connect->prepare("INSERT INTO atendimento (nome_cliente, telefone1, telefone2, email, cidade, curso, origem_contato, consultor, tipoatend, data_atendimento) 
                                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())");
    $sql->bind_param("ssssssssi", $nomeCliente, $fone1, $fone2, $email, $cidade, $curso, $origem, $consultor, $tipoAtend);
    $sql->execute();
    
    if($sql->affected_rows <= 0){
        echo "<script type='text/javascript'>alert('Erro ao registrar atendimento!');window.location.href='../../formAtendimentoAdmin.php';</script>";
    }else{
        header("location: ../../formAtendimentoAdmin.php");
        
    }
    
    
?>