<?php 
include ("banco.php");

$idade = $_POST['idade'];
$nome = $_POST['nome']; 
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];

$sql = "INSERT INTO form (nome, idade, email, telefone, cidade) 
VALUES ('$nome', $idade, '$email', '$telefone', '$cidade')";

if ($conexao->query($sql)) {
    echo "Dados salvos com sucesso no banco de dados.";
} else {
    echo "Erro ao salvar os dados: " . $conexao->error;
}
?>