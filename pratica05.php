<?php
    $especiesObservadas = 
    [
        "Beija-flor",
        "Canário", 
        "Bem-te-vi", 
        "Sabiá", 
        "Beija-flor",
        "Coruja"
    ];

    $especieProcurada = 'Pardal';
    if (in_array($especieProcurada, $especiesObservadas)){
        echo "Um pardal foi observado<br><br>";
    }
    else
    {
        echo "Nenhum Pardal foi observado<br><br>";
    }
    $especiesUnicas = array_unique($especiesObservadas);
    echo "Todas as especies unicas observadas foram: <br><br>". implode("<br><br>", $especiesUnicas);
?>