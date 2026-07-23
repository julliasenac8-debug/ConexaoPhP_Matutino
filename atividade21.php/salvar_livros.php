<?php 
include "banco21.php";
$titulo_do_livro = $_POST["titulo_do_livro"];
$autor = $_POST["autor"];
$editora = $_POST["editora"];
$ano_de_publicacao = $_POST["ano_de_publicacao"];
$quantidades_de_paginas = $_POST["quantidades_de_paginas"];

$sql = "INSERT INTO livros(titulo_do_livro, autor, editora, ano_de_publicacao, quantidades_de_paginas)
VALUES('$titulo_do_livro', '$autor ', '$editora', '$ano_de_publicacao', '$quantidades_de_paginas' )";

if ($conexao->query($sql)) {
    echo "Dados salvos com sucesso!";
}
else{
    echo "Erro ao salvar os dados!";
}
?>