<?php
    $listaParticipante = [
        "Carlos",
        "Ana",
        "João",
        "Maria",
        "João",
        "Pedro",
        "Maria",
        "Ana"
    ];
    $participantesUnicos = array_unique($listaParticipante);
    echo "Essa é a lista com todos os participantes unicos <br><br>" . implode("<br>", $participantesUnicos) ."";
?>