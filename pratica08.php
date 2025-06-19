<?php
    $cartas = [
        "Ás de Ouro",
        "Rei de paus",
        "Quatro de espada",
        "Cinco de ouro",
        "Ás de coração"
    ];

    $cartasEmbaralhadas = $cartas;
    shuffle($cartasEmbaralhadas);
    echo "Todas as cartas na ordem original são essas: <br><br>". implode("<br>", $cartas);
    echo "<br><br>"."Essa são todas as cartas ordenadas aleatoriamente: <br><br>". implode("<br>", $cartasEmbaralhadas);

?>