<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $itens = [
        [
            "nome" => $_POST["nome1"],
            "SKU"  => $_POST["sku1"],
        ],
        [
            "nome" => $_POST["nome2"],
            "SKU"  => $_POST["sku2"],
        ],
        [
            "nome" => $_POST["nome3"],
            "SKU"  => $_POST["sku3"],
        ],
        [
            "nome" => $_POST["nome4"],
            "SKU"  => $_POST["sku4"],
        ],
        [
            "nome" => $_POST["nome5"],
            "SKU"  => $_POST["sku5"],
        ]
    ];
    foreach ($itens as $value) {
        echo "Produto: ".$value['nome'].". SKU: ".$value['SKU']."<br>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Prática 01</title>
</head>
<body>
    <h2>Informe os produtos</h2>
    <form method="post">
        <?php for ($i=1; $i<=5; $i++): ?>
            <label>Nome do produto <?= $i ?>:</label>
            <input type="text" name="nome<?= $i ?>" required>
            <label>SKU:</label>
            <input type="number" name="sku<?= $i ?>" required><br><br>
        <?php endfor; ?>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>