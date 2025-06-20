<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cartas = [];
    for ($i = 1; $i <= 5; $i++) {
        $carta = trim($_POST["carta$i"]);
        if ($carta !== "") {
            $cartas[] = $carta;
        }
    }
    $cartasEmbaralhadas = $cartas;
    shuffle($cartasEmbaralhadas);
    echo "Todas as cartas na ordem original são essas: <br><br>" . implode("<br>", $cartas);
    echo "<br><br>Essas são todas as cartas ordenadas aleatoriamente: <br><br>" . implode("<br>", $cartasEmbaralhadas);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Prática 08</title>
</head>
<body>
    <h2>Informe as cartas</h2>
    <form method="post">
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <label>Carta <?= $i ?>:</label>
            <input type="text" name="carta<?= $i ?>" required><br><br>
        <?php endfor; ?>
        <input type="submit" value="Embaralhar">
    </form>
</body>
</html>