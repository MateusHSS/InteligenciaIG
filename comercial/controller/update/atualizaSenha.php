<?php
    include_once "../../config/conexao.php";

    $setor = $_POST['setor'];

    $sql = $connect->prepare("SELECT * FROM $setor ORDER BY hora ASC");
    $sql->execute();

    $result = $sql->get_result();

    while($res = $result->fetch_assoc()){
        ?>
    <div class="col m12 center dale" id='<?php echo $res['senha'] ?>'>
        <h5><?php echo $res['senha'] ?><i class="material-icons red-text right">close</i><i class="material-icons green-text right" onclick="alert('oi');">check</i></h5>
    </div>
    <div class="divider"></div>

<?php
    }
?>