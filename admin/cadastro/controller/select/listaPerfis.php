<?php
    include_once "../../../config/conexao.php";

    $sql = $connect->prepare("SELECT * FROM perfil");
    $sql->execute();
    $resultPerf = $sql->get_result();


?>