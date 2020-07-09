<?php
    include_once "../../../config/conexao.php";

    $sql = $connect->prepare("SELECT * FROM funcionario INNER JOIN tipofunc ON funcionario.tipo = tipofunc.idtipofunc LIMIT 100");
    $sql->execute();
    $resultFunc = $sql->get_result();


?>