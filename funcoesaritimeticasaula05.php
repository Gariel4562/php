<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções aritiméticas</title>
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
            padding:20px;
            text-shadow: 1px 1px 1px black;
            box-shadow: 3px 3px 3px cornflowerblue;
            margin-top: 120px;


        }

        </style>






</head>
<body>


      <h1>Funções aritiméticas</h1>

    <div>
        <?php 
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];

        echo "<h2>Valores recebidos: $v1 e $v2 <h2>";
        echo "O valor absoluto de $v2 e ". abs($v2);
        echo "</br>O valor de $v1<sup>$v2</sup> e " . pow($v1, $v2);
        echo "</br> A raiz de $v1 é " . sqrt ($v1);
        echo "</br> O valor de $v2 arrendondado é " . round ($v2);
        echo "</br> a parte inteira de $v2 é " . intval ($v2);
        echo "</br> O valor de $v1 em moeda e R$ " . number_format($v1, 2, ",", "." );


        
        
        
        
        
        
        
        
        
        
        
        
        
        ?>


    </div>







    
</body>
</html>