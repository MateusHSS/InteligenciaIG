<?php
    include_once "../../../config/conexao.php";

    $sql = $connect->prepare("SELECT * FROM usuario INNER JOIN perfil ON usuario.perfil = perfil.idperfil");
    $sql->execute();
    $resultUsu = $sql->get_result();


?>