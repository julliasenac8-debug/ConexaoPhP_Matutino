<?php 
include"banco21.php";

$id = $_POST['id'];

$titulo_do_livro = $_POST['titulo_do_livro'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];
$ano_de_publicacao = $_POST['ano_de_publicacao'];
$quantidades_de_paginas = $_POST['quantidades_de_paginas'];

$sql = "UPDATE livros SET
titulo_do_livro = '$titulo_do_livro',
autor = '$autor',
editora = '$editora',
ano_de_publicacao = '$ano_de_publicacao',
quantidades_de_paginas = '$quantidades_de_paginas' WHERE id = $id ";

if($conexao->query($sql)){
header("location:listar_livros.php");

exit();
}else {
    echo"Erro ao atualizar o cliente";

}



?>