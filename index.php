<?php
require 'conecta.inc.php';
?>

<script>
function confirmationDelete(anchor)
{
   var conf = confirm('Are you sure want to delete this record?');
   if(conf)
      window.location=anchor.attr("href");
}
</script>

<a href="adicionarProfessor.php">Cadastrar Novo Professor</a>
<center><table border="1" width="80%">
<tr>
<th colspan="5" align="center">Professores Cadastrados</th>
</tr>
<tr>
<th>Código</th>
<th>Nome</th>
<th>Data de Admissão</th>
<th>Disciplina</th>
<th>Ações</th>
</tr>
<?php
$sql = "SELECT * FROM professores";
$sql = $pdo->query($sql);
if($sql->rowCount() > 0){
    foreach($sql->fetchAll() as $professor){
        echo '<tr align="center">';
        echo '<td>'.$professor['codigo'].'</td>';
        echo '<td>'.$professor['nome'].'</td>';
        echo '<td>'.$professor['data_admissao'].'</td>';
        echo '<td>'.$professor['disciplina'].'</td>';
        echo '<td><a href="editarProfessor.php?codigo='.$professor['codigo'].'">Editar</a> - <a onclick="javascript:confirmationDelete($(this));return false;" href="excluirProfessor.php?codigo='.$professor['codigo'].'">Excluir</a></td>'; 
        echo '</tr>';
    }
}else{
    echo 'Nenhum registro encontrado!';
}
?>

</table></center>

<br/><br/>

<a href="adicionarAluno.php">Cadastrar Novo Aluno</a>
<center><table border="1" width="80%">
<tr>
<th colspan="5" align="center">Alunos Cadastrados</th>
</tr>
<tr>
<th>Matrícula</th>
<th>Nome</th>
<th>Email</th>
<th>Curso</th>
<th>Ações</th>
</tr>
<?php
$sql = "SELECT * FROM alunos";
$sql = $pdo->query($sql);
if($sql->rowCount() > 0){
    foreach($sql->fetchAll() as $aluno){
        echo '<tr align="center">';
        echo '<td>'.$aluno['matricula'].'</td>';
        echo '<td>'.$aluno['nome'].'</td>';
        echo '<td>'.$aluno['email'].'</td>';
        echo '<td>'.$aluno['curso'].'</td>';
        echo '<td><a href="editarAluno.php?matricula='.$aluno['matricula'].'">Editar</a> - <a href="excluirAluno.php?matricula='.$aluno['matricula'].'">Excluir</a></td>'; 
        echo '</tr>';
    }
}else{
    echo 'Nenhum registro encontrado!';
}
?>

</table></center>
