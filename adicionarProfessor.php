<?php
require 'conecta.inc.php';

if(isset($_POST['nome']) && empty($_POST['nome'] == false) && 
    isset($_POST['disciplina']) && empty($_POST['disciplina'] == false)){
    $nome = addslashes($_POST['nome']);
    $data = addslashes($_POST['data']);
    $disciplina = addslashes($_POST['disciplina']);
    
    $sql = "INSERT INTO professores SET nome='$nome', data_admissao='$data', disciplina='$disciplina'";
    $pdo->query($sql); 

    header("Location: index.php");
}
/*else{
//    echo "Preencha os campos corretamente!";
}*/


?>


<form method="post">
<table>
<th colspan="2" align="center">Cadastra Professor</th>
<tr>
<td>
Nome:
</td>
<td>
<input type="text" name="nome" id="nome" required>
</td>
</tr>
<tr>
<td>
Data de Admissão:
</td>
<td>
<input type="date" name="data" id="data" required>
</td>
</tr>
<tr>
<td>
Disciplina:
</td>
<td>
<input type="text" name="disciplina" id="disciplina" required>
</td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" value="Cadastrar">
</td>
</tr>
</table>

</form>