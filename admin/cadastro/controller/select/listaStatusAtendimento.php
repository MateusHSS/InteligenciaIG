<?php
    include_once "../../../config/conexao.php";

    $sql = $connect->prepare("SELECT * FROM statusatendimento");
    $sql->execute();
    $resultSttsAtend = $sql->get_result();


?>