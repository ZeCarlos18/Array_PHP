<?php
    $Livros = [
        "Senhor dos Aneis",
        "Dom quixote",
        "1984",
        "Cem anos de Solidão"
    ];
    echo "Esses são os Livros que tem no estoque atual da Biblioteca:"."<br>";
    foreach ($Livros as $key){
        echo "Titulo: ".$key."<br>";
    }
    echo "<br>"."Adicionando o livro: Calculo 1"."<br><br>";
    $novo_livro = "Calculo 1";
    array_push($Livros, $novo_livro);
    echo "Estoque após a chegada do Livro ".$novo_livro."<br><br>";
    foreach ($Livros as $key){
        echo "Titulo: ".$key."<br>";
    }    
    $indice = 2;
    $livro_removido = $Livros[$indice];
    echo "<br>"."O terceiro livro do estoque foi vendido"."<br><br>";
    echo "Estoque atual pós remover o livro ".$livro_removido." é:<br><br>";
    array_splice($Livros, $indice, 1);
        foreach ($Livros as $key){
        echo "Titulo: ".$key."<br>";
    }    
?>   