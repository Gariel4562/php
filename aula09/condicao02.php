<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/style.css">
    <title>Document</title>
</head>
<body>
       <h1>Resultado</h1>
     <?php
     

         $a = isset($_GET["ano"])?$_GET["ano"]:1900;
         $i = date("Y") - $a;
         echo "Resultado : Você nasceu em $a e tem $i anos de idade.<br>";
         if($i < 16) {
             $tipovoto = "Não vota";
         }
         elseif (($i >= 16 && $i < 18) || ($i >=65)) {
                 $tipovoto = "Voto opcional";
             } 
             else {
                 $tipovoto = "Voto Obrigatório";
             }




         

         echo "Para essa idade $tipovoto" ;


         







         ?>













    
</body>
</html>