<?php
    $Livros = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    for ($i = 1; $i <= 4; $i++) {
        $nome = trim($_POST["livro$i"]);
        if ($nome !== "") {
            $Livros[] = $nome;
        }
    }
    echo "Esses são os Livros que tem no estoque atual da Biblioteca:"."<br>";
    foreach ($Livros as $key){
        echo "Titulo: ".$key."<br>";
    }  
    $indice = 2;
    $livro_removido = $Livros[$indice];
    echo "<br>"."O terceiro livro do estoque foi vendido"."<br><br>";
    echo "Estoque atual pós remover o livro ".$livro_removido." é:<br><br>";
    array_splice($Livros, $indice, 1);
    foreach ($Livros as $key){
        echo "Titulo: ".$key."<br>";
    } 
    } 
?>   
<!DOCTYPE html>
<html>
<head>
    <title>Prática 03</title>
</head>
<body>
    <h2>Informe os livros do estoque</h2>
    <form method="post">
        <?php for ($i = 1; $i <= 4; $i++): ?>
            <label>Livro <?= $i ?>:</label>
            <input type="text" name="livro<?= $i ?>" required><br><br>
        <?php endfor; ?>
        <input type="submit" value="Enviar">
    </form>
</body>
</html> 