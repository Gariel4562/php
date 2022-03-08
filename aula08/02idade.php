<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parte php do projeto idade</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
    <div>
        <?php
        $nome = isset($_GET["nome"])?$_GET["nome"]: "[nao informado]";
        $ano = isset($_GET["ano"])?$_GET["ano"] :0;
        $sexo = isset($_GET["sexo"])?$_GET["sexo"] : "[sem sexo]";
        $idade = date("Y") - $ano;

        echo "$nome é $sexo e tem $idade anos"; 




        







    ?>

    <br> <br>
    <a href="02exercicio.html">voltar</a>
    </div>




    
</body>
</html>