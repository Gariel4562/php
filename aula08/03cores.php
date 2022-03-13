<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php

    $txt = isset($_GET["t"])?$_GET["t"]:"Texto Generico";
    $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
    $cor = isset($_GET["cor"])?$_GET["cor"]: "#000000";


   ?>




    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parte php cores</title>
    <link rel="stylesheet" href="estilo/style.css">
    <style>
        .texto {
          font-size:  <?php echo $tam; ?>;
          color: <?php echo $cor; ?>;

        }






    </style>
</head>
<body>
    <div>
        <?php 

        echo "<span class='texto'>$txt</span>"; // o $txt vai receber a palavra que coloquei no input dele e essa palavra vai retornar com a cor que eu escolhi nas opções e essa cor vai ir para o Css, e o tamanho também, e o txt então vai receber Cor, tamanho e a palavra que eu coloquei, caso não colocar nenhuma palavra ele vem com texto generico.











      ?>




    </div>





    
</body>
</html>