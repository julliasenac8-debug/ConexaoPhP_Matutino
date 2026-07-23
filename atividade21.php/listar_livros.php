<?php 

include "banco21.php";

$sql = "SELECT * FROM livros";

$resultado = $conexao->query($sql);

while ($livros = $resultado->fetch_assoc()) {
echo "titulo_do_livro: ". $livros ['titulo_do_livro']. "<br>";
echo "autor: ". $livros ['autor']. "<br>";
echo "editora: ". $livros ['editora']. "<br>";
echo "ano_de_publicacao: ". $livros ['ano_de_publicacao']. "<br>";
echo "quantidades_de_paginas: ". $livros ['quantidades_de_paginas']. "<br>";



echo "<a href='editar_livros.php?id=".$livros['id']."'> <button> Atualizar </button> </a>";

echo "<hr>";

}
?>