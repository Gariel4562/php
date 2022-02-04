<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritiméticos</title>
    <style>
        
        h1 {
            text-align: center;
            background-image: linear-gradient(to right, transparent, aqua, transparent);

        }
        
        
        div{
            background-color: cadetblue;
            width:300px;
            height:350px;
            margin:auto;
            text-align: center;
            border-radius: 30px;
            
            text-shadow: 1px 1px 1px black;
            box-shadow: 3px 3px 3px cornflowerblue;
            margin-top: 120px;


        }







    </style>
</head>
<body>

         <h1>Operadores aritiméticos</h1>
<div>

      


       <?php

       $n1 = $_GET["a"];
       $n2 = $_GET["b"];

       echo "<h2>valores recebidos: $n1 e $n2<h2>";

       $m = ($n1 + $n2) / 2;
       

       echo " A soma vale ". ( $n1 + $n2 );
       echo "<br><br>A subtração vale ". ($n1 - $n2);
       echo "<br><br>A Multiplicação vale ". ($n1 * $n2);
       echo "<br><br>A Divisão vale ". ($n1 / $n2);
       echo "<br><br>O resto de divisão vale ". ($n1 % $n2);

       echo "<br>A média vale $m";










        ?>





</div>







    
</body>
</html>