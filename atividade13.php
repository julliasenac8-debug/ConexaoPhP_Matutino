<?php 

include("conexao.php");

$numero1 = 9;
$numero2 = 45;
$numero3 = 12;

$resultado = $numero1 * $numero2 * $numero3;


$sql = "INSERT INTO multiplicacao (numero1, numero2, numero3, resultado) 
VALUES ($numero1, $numero2, $numero3, $resultado)";


if ($conexao->query($sql)){

    echo"<br>Dados Salvos da multiplicacao!";
    
}else{
    echo"<br>Erro ao salvar";
}


?>