<?php
    $categoriasProdutos = [
        "Livro",
        "Moda",
        "Eletrônicos",
        "Esportes",
        "Lazer"
    ];
    $ordemAlfabetica = $categoriasProdutos;
    sort($ordemAlfabetica);
    $ordemDecrescente = $categoriasProdutos;
    rsort($ordemDecrescente);

    echo "As categorias cadastradas em ordem alfabetica são: <br><br>". implode("<br>", $ordemAlfabetica) ."<br><br>";
    echo "As categorias cadastradas em ordem alfabetica decrescente são: <br><br>". implode("<br>", $ordemDecrescente) ."<br><br>";
?>