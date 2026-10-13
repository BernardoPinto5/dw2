<?php
echo "<h2>Resultados do Formulário</h2>";
$nome = $_POST['nome'];
echo "Nome:$nome<br>";
$apelido = $_POST['apelido'];   
echo "Apelido:$apelido<br>";
$aluno = $_POST['aluno'];
echo "Aluno do CTESP de informática:$aluno<br>";
$idade = $_POST['idade'];
echo "Idade:$idade<br>";
$localidade = $_POST['Localidade'];
echo "Localidade:$localidade<br>";
$sugestoes = $_POST['sugestões'];
echo "Sugestões:$sugestoes<br>";

?>