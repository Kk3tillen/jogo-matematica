<?php
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $op = $_GET['op'];
    $resposta = $_POST['resposta'];

    switch($op){
        case 'soma';
            $resultado = $n1 + $n2;
            break;
        case 'subtração';
            $resultado = $n1 - $n2;
            break;
        case 'divisão';
            $resultado = $n1 / $n2;
            break;
        default;
            $resultado = $n1 * $n2;
            break;
    }

    $acertou = $resultado == $resposta;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matematicando</title>
    <link rel="stylesheet" href="style/styleResultado.css">
</head>
<body>
    <?php if($acertou == true){ ?>
        <div class="resultado">
            <div class="certa">
                <img class="fogos" src="img\fogos.svg" alt="deu certo!">
                <h1>Parabéns<br>
                Você acertou!!</h1>
                <img class="fogos" src="img\fogos.svg" alt="deu certo!">
            </div>
            <a href="/"><img id="reload" src="img\reload.svg" alt="deu certo!"> Jogar Novamente</a>
        </div>
    <?php } else { ?>  
        <div class="resultado2">
            <div class="errado">
                <img class="sad" src="img\sad.svg" alt="triste">
                <h1>Que pena, Você errou!</h1>
            </div>
            <div class="tentarNovamente">
                <a href="/"><img id="reload" src="img\reload.svg" alt="você errou!">Tentar Novamente</a>
            </div>
        </div>
    <?php }?> 
</body>
</html>