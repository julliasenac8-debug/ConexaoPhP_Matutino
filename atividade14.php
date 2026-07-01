<?php 

include("conexao.php");

$numero1 = 19;
$numero2 = 23;
$numero3 = 56;

$resultado = $numero1 - $numero2 - $numero3;


$sql = "INSERT INTO subtracao (numero1, numero2, numero3, resultado) 
VALUES ($numero1, $numero2, $numero3, $resultado)";


if ($conexao->query($sql)){

    echo"<br>Dados Salvos da subtracao!";
    
}else{
    echo"<br>Erro ao salvar";
}



?>