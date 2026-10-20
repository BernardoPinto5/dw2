
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $nome = $_POST["nome"]??"Anonimo";
 $pasta = "documentos/";
 if(!is_dir($pasta)){
  mkdir($pasta);
 }
 $temp = $_FILES["ficheiro"]["tmp_name"];
 $nomeficheiro = $_FILES["ficheiro"]["name"];
 move_uploaded_file($temp, $pasta.$nomeficheiro);
}
else
{
 echo "Acesso inválido";
}


?>