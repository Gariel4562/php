<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada com for</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
    <h1>Tabuada com for</h1>
    <form action="exercicio002.php" method="get">
        <select name="num" id="num">
            <?php
                 for ($c = 1; $c <= 10;$c++) {
                     echo "<option>$c</option>";
                 }





            ?>
        </select>
        <input type="submit" value="Tabuada">






    </form>
    






    
</body>
</html>