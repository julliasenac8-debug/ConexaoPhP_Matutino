<?php 


include("conexao.php");

$numero1 = 10;
$numero2 = 12;
$numero3 = 15;

$resultado = $numero1 + $numero2 + $numero3;


$sql = "INSERT INTO soma (numero1, numero2, numero3, resultado) 
VALUES ($numero1, $numero2, $numero3, $resultado)";


if ($conexao->query($sql)){

    echo"<br>Dados Salvos da soma!";
    
}else{
    echo"<br>Erro ao salvar";
}






?>