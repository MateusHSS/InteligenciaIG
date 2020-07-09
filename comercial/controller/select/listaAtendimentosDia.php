<?php
    include_once "../config/conexao.php";

    $sql = $connect->prepare("SELECT * FROM atendimento WHERE consultor = 0 AND data_retorno = CURDATE()");
    $sql->execute();
    $resultAtend = $sql->get_result();



?>