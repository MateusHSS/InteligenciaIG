<?php

$banco= "ongceu28_institutogourmet";
$host= "localhost";
$user= "ongceu28_mateus";
$senha= "47126mateus";

$connect = mysqli_connect($host, $user, $senha, $banco) or die("Error " . mysqli_error($connect));

mysqli_set_charset($connect,"utf8");

?>