<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir</title>
    <link rel="stylesheet" href="estilo/style.css">

</head>
<body>
    <pre>
    <?php
    $v = array("a", "j", "m", "x", "k");
    $tot = count($v);

    echo "O vator tem $tot Elementos. </br>"; // mostra quantidade de elementos usando o print_r no lugar de var_dump

    print_r($v);   
    // var_dump($v); // mostra tipo, quantidade de posições.





    ?>
    </pre>



    
</body>
</html>