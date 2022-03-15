<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>condição idade</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
    <h1>Resultado</h1>
    <?php

        $a = isset($_GET["ano"])?$_GET["ano"]:1900;
        $i = date("Y") - $a;
        echo "Resultado : Você nasceu em $a e tem $i anos de idade.<br>";
        if($i >= 18) {
            $v = "Pode Votar";
            $d = "Pode Dirigir";
        } 
        else {
            $v = "Não Pode Votar";
            $d = "Não pode Dirigir";
        } 
        echo "Resultado : Você $v e $d";
        









        ?>





    
</body>
</html>