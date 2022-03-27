<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
    <h1>Resultado</h1>

    <?php

       $estado = isset($_GET["esta"])?$_GET["esta"]:0;

       switch ($estado) {
           case "Goiás";
           case "Mato Grosso";
           case "Mato Grosso do Sul";
           case "Distrito Federal";
              echo "Você mora na região : <strong> Centro-Oeste </strong>";
              break;
           case "Alagoas";
           case "Bahia";
           case "Ceará";
           case "Maranhão";
           case "Piauí";
           case "Pernambuco";
           case "Paraíba";
           case "Rio Grande do Norte";
           case "Sergipe";
              echo "Você mora na região : <strong> Nordeste </strong>";
              break;
           case "Acre";
           case "Amazonas";
           case "Amapá";
           case "Pará";
           case "Rondônia";
           case "Roraima";
           case "Tocantins";
              echo "Você mora na região : <strong> Norte </strong>";
              break;
           case "Paraná";
           case "Rio Grande do Sul";
           case "Santa Catarina";
              echo "Você mora na região : <strong> Sul </strong>";
              break;
           case "Espírito Santo";
           case "Minas Gerais";
           case "Rio de Janeiro";
           case "São Paulo";
              echo "Você mora na região : <strong> Sudeste <strong>";
              break;

              
            }

       









 

 
     ?>

<br> <br>
    <a href="exercicio03.html" class="botao">voltar</a>
    

    
</body>
</html>