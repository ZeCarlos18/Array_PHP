<?php
$categoriasProdutos = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    for ($i = 1; $i <= 5; $i++) {
        $cat = trim($_POST["categoria$i"]);
        if ($cat !== "") {
            $categoriasProdutos[] = $cat;
        }
    }
    $ordemAlfabetica = $categoriasProdutos;
    sort($ordemAlfabetica);
    $ordemDecrescente = $categoriasProdutos;
    rsort($ordemDecrescente);

    echo "As categorias cadastradas em ordem alfabetica são: <br><br>". implode("<br>", $ordemAlfabetica) ."<br><br>";
    echo "As categorias cadastradas em ordem alfabetica decrescente são: <br><br>". implode("<br>", $ordemDecrescente) ."<br><br>";
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Prática 06</title>
</head>
<body>
    <h2>Informe as categorias de produtos</h2>
    <form method="post">
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <label>Categoria <?= $i ?>:</label>
            <input type="text" name="categoria<?= $i ?>" required><br><br>
        <?php endfor; ?>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>