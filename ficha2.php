<?php
function retangulo($altura)
{
    for($i=1;$i<=$altura;$i++)
    echo "********<br>";
}
retangulo(20);
echo "<br>exercicio2<br>";
function trocar($a,$b)
{
  echo "Recebi em A=$a e em B=$b";
  $aux=$a;
  $a=$b;
  $b0=$aux;

  echo "<br>Depois de trocar A=$a e B=$b";
}
trocar(5,7);
echo "<br>grupo2 exercicio 1<br>";
function inverter($string)
{
   $tamanho=strlen($string);
   for($i=$tamanho-1;$i>=0;$i--)
    echo $string[$i];
}
inverter("david");
echo "<br>exercicio 3 grupo3<br>";
$cavalos=array("bernardo"=>20,"joao"=>50,"kelvin"=>9,"gongas"=>30,"telmo"=>18,"jorge"=>11,"ana"=>40,"paixao"=>31,"porto"=>78,"nuno"=>50)
asort($cavalos); $a=1;
foreach ($cavalos as $chave=>$valor){
    if($a==1){
  {echo "ovencedor é:$chave com $valor segundos.";break;}    
    }
}
?>