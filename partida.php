<?php
    $n1 = rand(1,99);
    $n12 = rand(1,99);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/stylepartida.css">
</head>
<body>
    <h1>Nova partida</h1>
    <div class="partidas">
        <div class="numeros"> 
            <span><?php echo $n1;?></span>
            <span>X</span>
            <span><?php echo $n2;?></span>
        </div>
        <div class="resultado">
            <input class="form" type="number">
            <button class="btn" type="button">Calcular</button> 
     </div>
    </div>
</body>
</html>