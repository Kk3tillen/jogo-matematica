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
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <?php if($acertou == true){ ?>
        <div class="resultado">
            <img src="https://i0.wp.com/abes-dn.org.br/wp-content/uploads/2022/05/quality-g096c0fb43_1920.png?fit=1200%2C1200&ssl=1" alt="deu certo!">
            <h1>Parabéns, Você acertou!</h1>
            <a href="/">Tentar Novamente</a>
        </div>
    <?php } else { ?>  
        <div class="resultado">
            <img src="https://imagensemoldes.com.br/wp-content/uploads/2020/08/Imagem-X-Vermelho-PNG-1015x1024.png" alt="deu ruim!">
            <h1>Que pena, Você errou!</h1>
            <a href="/">Tentar Novamente</a>
        </div>
    <?php }?> 
</body>
</html>