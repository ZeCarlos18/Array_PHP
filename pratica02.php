<!DOCTYPE html>
<html>
    <head>
        <title>Saber se Passou</title>
    </head>
    <body>
        <h2>Preencher Boletim<br></h2>
        <form method="post">
            <label for="portugues:">Português:<br></label>
            <label>Nota:<br></label>
            <input type="number" step="0.1" name="portugues" id="portugues" required><br><br>
            <label for="matematica">Matemática:<br></label>
            <label>Nota:<br></label>
            <input type="number" step="0.1" name="matematica" id="matematica" required><br><br>
            <label for="historia">História:<br></label>
            <label>Nota:<br></label>
            <input type="number" step="0.1" name="historia" id="historia" required><br><br>
            <label for="geografia">Geografia:<br></label>
            <label>Nota:<br></label>
            <input type="number" step="0.1" name="geografia" id="geografia" required><br><br>
            <input type="submit" value="Ver Boletin"><br><br>
        </form> 
    </body>    
</html>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $boletim = [
            'Português'=> (float)$_POST["portugues"],
            'Matemática'=> (float)$_POST["matematica"],
            'Histária'=> (float)$_POST["historia"],
            'Geografia'=> (float)$_POST["geografia"],
        ];
    foreach ($boletim as $key => $value) {
        if ($value >= 7) {
        echo "Materia: ".$key." Nota: ".$value." Aprovado"."<br>";  
    }
    else{
        echo "Materia: ".$key." Nota: ".$value." Reprovado"."<br>";
    }
    }
    }
?>