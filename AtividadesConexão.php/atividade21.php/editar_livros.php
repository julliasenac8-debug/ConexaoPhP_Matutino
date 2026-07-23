<?php 
include"banco21.php";

$id = $_GET['id'];

$sql ="SELECT * FROM livros WHERE id = $id";

$resultado = $conexao->query($sql);

$livros = $resultado->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style21.css">

</head>

<body>

    <form action="./atualizar_livro.php" method="POST">

        <h1>Atualizar Livros</h1>

        <div class="mb-3">
            <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id" value="<?php echo $livros ['id']?>">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">titulo_do_livro</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="titulo_do_livro" value="<?php echo $livros ['titulo_do_livro']?>">
        </div>


        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">autor</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="autor" value="<?php echo $livros ['autor']?>">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">editora</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="editora" value="<?php echo $livros ['editora']?>">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">ano_de_publicacao</label>
            <input type="tel" class="form-control" id="exampleInputPassword1" name="ano_de_publicacao" value="<?php echo $livros ['ano_de_publicacao']?>">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">quantidades_de_paginas</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="quantidades_de_paginas" value="<?php echo $livros ['quantidades_de_paginas']?>">
        </div>

        <button type="submit" class="btn btn-primary">Atualizar livros</button>
    </form>
</body>

</html>