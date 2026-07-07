<?php 
include "banco.php";
$nome = $_POST["nome"];
$idade = $_POST["idade"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$cidade = $_POST["cidade"];

$sql = "INSERT INTO form(nome, idade, email, telefone, cidade)
VALUES('$nome', '$idade', '$email', '$telefone', '$cidade' )";

if ($conexao->query($sql)) {
    echo "Dados salvos com sucesso!";
}
else{
    echo "Erro ao salvar os dados!";
}
?>