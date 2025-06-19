<?php 
    $itens = [
        [
            "nome" => "Maça",
            "SKU"=> "11",
        ],
        [
            "nome" => "Laranja",
            "SKU" => "22"
        ],
        [
            "nome"=> "Berinjela",
            "SKU"=> "33"
        ],
        [
            "nome"=> "Morango",
            "SKU"=> "44"
        ],
        [
            "nome"=> "Tomate",
            "SKU"=> "55"
        ]
        ];
    foreach ($itens as $key => $value) {
        echo "Produto: ".$value['nome'].". SKU: ".$value['SKU']."<br>"     ;   
        }
?>