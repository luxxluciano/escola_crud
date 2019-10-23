<?php
require 'conecta.inc.php';

$codigo=0;

if(isset($_GET['codigo']) && empty($_GET['codigo'] == false)){
    $codigo = addslashes($_GET['codigo']);
}    

    if(isset($_POST['nome']) && empty($_POST['nome'] == false)){
        $nome = addslashes($_POST['nome']);
        $disciplina = addslashes($_POST['disciplina']);
    
        $sql = "UPDATE professores SET nome = '$nome', disciplina = '$disciplina' WHERE codigo = '$codigo'";
        $pdo->query($sql);
    
        header("Location: index.php");
    }

$sql = "SELECT * FROM professores WHERE codigo = '$codigo'";
$sql = $pdo->query($sql);
if($sql->rowCount() > 0){
    $dado = $sql->fetch();
}else{
    header("Location: index.php");
}

?>

<form method="post">
<table>
<th colspan="2" align="center">Editar Professor</th>
<tr>
<td>
Nome:
</td>
<td>
<input type="text" name="nome" id="nome" value="<?php echo $dado['nome']; ?>">
</td>
</tr>
<tr>
<td>
Disciplina:
</td>
<td>
<input type="text" name="disciplina" id="disciplina" value="<?php echo $dado['disciplina']; ?>">
</td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" value="Atualizar">
</td>
</tr>
</table>

</form>