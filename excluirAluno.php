<?php
require 'conecta.inc.php';

if(isset($_GET['matricula']) && empty($_GET['matricula'] == false)){
    $matricula = addslashes($_GET['matricula']);

    $sql = "DELETE FROM alunos WHERE matricula = '$matricula'";
    $pdo->query($sql);

    header("Location: index.php");

}else{
    header("Location: index.php");
}



?>