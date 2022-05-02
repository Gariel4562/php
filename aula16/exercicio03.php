<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wordwrap</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
    <?php
    $t = "Aqui temos um texto gigante criado pelo php que mostrará o funcionamento da função Wordwrap";

    $r = wordwrap($t, 5, "<br/>\n", false );

    echo $r ;





   ?>



    
</body>
</html>