<?php
$precoProdutos = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    for ($i = 1; $i <= 4; $i++) {
        $nome = trim($_POST["produto$i"]);
        $preco = trim($_POST["preco$i"]);
        if ($nome !== "" && $preco !== "") {
            $precoProdutos[$nome] = $preco;
        }
    }
    $precoOrdenado = $precoProdutos;
    asort($precoOrdenado);
    echo "Esses são todos os nossos produtos que estão em estoque: <br><br>";
    foreach ($precoProdutos as $key => $value) {
        echo "Nome: ".$key . " | Preço: " ."R$".$value."<br>";
    }
    echo "<br>"."Esses são todos os nossos produtos que estão em estoque ordenados por valor: <br><br>";
    foreach ($precoOrdenado as $key => $value) {
        echo "Nome: ".$key . " | Preço: " ."R$".$value."<br>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Prática 07</title>
</head>
<body>
    <h2>Informe os produtos e preços</h2>
    <form method="post">
        <?php for ($i = 1; $i <= 4; $i++): ?>
            <label>Produto <?= $i ?>:</label>
            <input type="text" name="produto<?= $i ?>" required>
            <label>Preço:</label>
            <input type="number" name="preco<?= $i ?>" required><br><br>
        <?php endfor; ?>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>