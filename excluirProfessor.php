<?php
require 'conecta.inc.php';

if(isset($_GET['codigo']) && empty($_GET['codigo'] == false)){
    $codigo = addslashes($_GET['codigo']);

    $sql = "DELETE FROM professores WHERE codigo = '$codigo'";
    $pdo->query($sql);

    header("Location: index.php");

}else{
    header("Location: index.php");
}



?>