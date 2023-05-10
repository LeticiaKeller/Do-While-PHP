<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="DoWhile.css">
    <title>Estrutura DO-WHILE</title>
</head>
<body>
    <?php
        echo "<h1>Resultado: </h1>";

        $tab= $_GET["tabuada"];
        $contador= 0;
        do{
            $contador ++;
            $resultado= $tab * $contador;
            echo "<br/>$tab x $contador = $resultado";
        }while ($contador < 10);
    ?>

    <br/><a href="DoWhile.html"><button>Voltar</button></a>
</body>
</html>