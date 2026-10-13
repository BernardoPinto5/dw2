<?php
class Pessoa {
    private $nome;
    private $idade;

    public function apresentar(){
        echo "Olá,meu nome é", $this-> nome, "e tenho", $this->idade, "anos"

    }
    public function __construct($idade,$nome){
        $this->idade=$idade;
        $this->nome=$nome;
    } 
}
$pessoa1 = new Pessoa(20,"João");
$pessoa1->apresentar();
$pessoa2 = new Pessoa(30,"Maria");
$pessoa2->apresentar();
?>
<br>exercicio 2 <br>

<?php








?>