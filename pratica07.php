<?php
    $precoProdutos = [
        "Boné"=> "15,00",
        "Camisa" => "10,00",
        "Tenis"=> "50,00",
        "Calça"=> "20,00",
    ];
    $precoOrdenado = $precoProdutos;
    asort($precoOrdenado);
    echo "Esses são todos os nossos produtos que estão em estoque: <br><br>";
    foreach ($precoProdutos as $key => $value) {
    echo "Nome: ".$key . " | Preço: " .$value."<br>";
    }
    echo "<br>"."Esses são todos os nossos produtos que estão em estoque ordenados por valor: <br><br>";
    foreach ($precoOrdenado as $key => $value) {
    echo "Nome: ".$key . " | Preço: " .$value."<br>";
    }
?>