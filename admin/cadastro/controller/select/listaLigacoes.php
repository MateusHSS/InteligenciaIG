<?php
    include_once "../../../config/conexao.php";

    $sql = $connect->prepare("SELECT * FROM atendimento WHERE tipoatend = 1");
    $sql->execute();
    $resultFunc = $sql->get_result();


?>