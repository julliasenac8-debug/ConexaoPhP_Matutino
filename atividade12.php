<?php 

include("conexao.php");

$numero1 = 40;
$numero2 = 21;
$numero3 = 10;
$resultado = $numero1 + $numero2;


$sql = "INSERT INTO calculo (numero1, numero2,resultado) 
VALUES ($numero1, $numero2,$resultado)";


if ($conexao->query($sql)){
    echo"Dados Salvos com sucesso!";
}else{
    echo"Erro ao salvar";
    };




?>