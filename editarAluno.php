<?php
require 'conecta.inc.php';

$matricula=0;

if(isset($_GET['matricula']) && empty($_GET['matricula'] == false)){
    $matricula = addslashes($_GET['matricula']);
}    

if(isset($_POST['nome']) && empty($_POST['nome'] == false)){
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $curso = addslashes($_POST['curso']);

    $sql = "UPDATE alunos SET nome = '$nome', email = '$email', curso = '$curso' WHERE matricula = '$matricula'";
    $pdo->query($sql);

    header("Location: index.php");
}

$sql = "SELECT * FROM alunos WHERE matricula = '$matricula'";
$sql = $pdo->query($sql);
if($sql->rowCount() > 0){
        $dado = $sql->fetch();
}else{
    header("Location: index.php");
}

?>

<form method="post">
<table>
<th colspan="2" align="center">Editar Aluno</th>
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
Data de Admissão:
</td>
<td>
<input type="email" name="email" id="email" value="<?php echo $dado['email']; ?>">
</td>
</tr>
<tr>
<td>
Disciplina:
</td>
<td>
<input type="text" name="curso" id="curso" value="<?php echo $dado['curso']; ?>">
</td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" value="Atualizar">
</td>
</tr>
</table>

</form>