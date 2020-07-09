<?php
    include_once "../../../config/conexao.php";

    $sql = $connect->prepare("SELECT * FROM tipofunc");
    $sql->execute();
    $resultTipoFunc = $sql->get_result();


?>