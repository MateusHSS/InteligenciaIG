<?php
    include_once "../../config/conexao.php";   


    $sql = $connect->prepare("INSERT INTO senhas_financeiro(hora) VALUE (NOW())");
    $sql->execute();

    $result = $sql->get_result();

    if($sql->affected_rows == 0){
        echo "erro";
    }else{
        $senha = 'FI'.str_pad($connect->insert_id, 3, "0", STR_PAD_LEFT);

        $sqlSenha = $connect->prepare("UPDATE senhas_financeiro SET senha = '$senha' WHERE idsenhas_financeiro = '$connect->insert_id'");
        $sqlSenha->execute();
    
        $resultSenha = $sqlSenha->get_result();
        
        if($sqlSenha->affected_rows == 0){
            echo "erro";
        }else{
            echo $senha;
        }
    }
?>