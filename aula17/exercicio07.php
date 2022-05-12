<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>str_replace</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
    <?php
        $frase = "Gosto de estudar Matemática! Matemática é muito legal!";

        $novafrase = str_ireplace("matemática", "php", $frase); // Altera matemática por php

         echo "$novafrase";




    ?>









    
</body>
</html>