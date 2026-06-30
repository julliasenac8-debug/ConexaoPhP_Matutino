<?php 
$host = "localhost";
$usuario = "root";
$senha = "senac";
$banco = "db_php";
$porta = "3307";

$conexao = mysqli_connect(
$host, 
$usuario,
$senha,
$banco,
$porta
);

if($conexao->connect_errno) {
    die("Erro ao conectar com o banco de dados".$conexao->connect_error);
}

echo"Conectado com sucesso ao banco de dados!<br>";

?>