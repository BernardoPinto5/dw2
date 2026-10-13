<?php
$x=34;
echo$x;
if ($x==34)
    echo " <br> x é 34";
else
    echo " x não é igual a 34";
function paridade($x)
{
    if($x%2==0)
        echo "$x é par!"
    else
        echo "$x é impar!"
}
paridade(300);

?>