<?php
    $numero_aleatorio = [];
    for( $i = 0; $i < 10; $i++ ){
        $numero_aleatorio [] = rand(1, 60);
    }

    echo "Os numeros sorteados foram:<br>". implode(", ",$numero_aleatorio);
    function ePrimo($numero){
        if ( $numero <=1){
            return false;
        }
        for ($i=2; $i <= sqrt($numero); $i++)
            if ( $numero % $i == 0){
                return false;
        }
        return true;
        }
    $contador = 0;
    $numerosPrimos = [];

    foreach ($numero_aleatorio as $numero){
        if (ePrimo($numero)){
            $numerosPrimos [] = $numero;
            $contador++;
        }
    }
    echo "<br><br>"."Os numeros sorteados que são primos são:<br>";
    if($numerosPrimos > 0){
        echo implode(", ",$numerosPrimos)." Total: ".$contador;
    }

?>