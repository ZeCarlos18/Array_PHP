<?php
    $idFontesA = [
        101, 105, 102
    ];
    $idsFonteB = [
        103, 101, 106
    ];
    $todosIds = array_merge($idFontesA, $idsFonteB);
    $idsUnicos = array_unique($todosIds);
    echo "Esses são todos os IDS unicos: <br><br>". implode("<br>", $idsUnicos);
?>