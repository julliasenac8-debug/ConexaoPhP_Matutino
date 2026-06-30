<?php 

//inclui um arquivo responsável pela conexão com o banco de dados
include("conexao.php");

$numero1 = 20;
$numero2 = 21;
$resultado = $numero1 + $numero2;

//montar o sql
$sql = "INSERT INTO calculo (numero1, numero2, resultado) 
VALUES ($numero1, $numero2, $resultado)";

//se e senão
if ($conexao->query($sql)){
    echo"Dados Salvos com sucesso!";
}else{
    echo"Erro ao salvar";
};


?>