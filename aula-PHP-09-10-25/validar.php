<?php
//para parar o servidor e o terminal é so dar Crtl + C

//echo $texto = "Olá, mundo";
$titulo = "Esse é o Texto da variável título";
// echo $titulo;

//VALIDA se os dados estão sendo enviados por POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // 
    $nome = empty($_POST['nome']) ? "Não informado" : $_POST['nome'];

    // se post['chute']
    $chute = empty($_POST['chute']) ? -1 : $_POST['chute'];

    // se (chute for menor que 0 ou maior que 10) faça -> chute="numero invalido"
    if ($chute < 0 || $chute > 10) {
        $chute = "Numero inválido!";
    }
} else { // se não for enviado nada faça:
    $nome = "Nenhuma informação enviada.";
    $chute = "Nenhuma informação enviada.";
}
// cria a variavel sorteado e ele recebe um rand(numero aleatorio) de 0 a 10
$sorteado = rand(0, 10);
$pSorteado
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <h1> <?= $titulo ?> </h1>

    <p>Dados informados:</p>
    <p><br>Nome: <?= $nome ?> </p>
    <p><br>Chute: <?= $chute ?> </p>
    <p><br>Sorteado: <?= $sorteado ?> </p>

    <?php if ($sorteado == $chute): ?>
        <h2 class="ganhou"> Parabéns, você ganhou!</h2>
        <p>Receba o pix!</p>
        <a href="index.html"><button>Receber</button></a>
    <?php else: ?>
        <h2 class="perdeu">Não foi dessa vez!</h2>
        <p>Tente novamente.. até ganhar</p>
        <a href="index.html"><button>Tentar novamente</button></a>
    <?php endif; ?>

    <table>
        <thead>
            <th>Conta</th>
            <th>Resultado</th>
        </thead>
        <tbody>
            <tr>
                <td><?= $chute ?> x 0 = </td>
                <td><?= $chute * 0 ?> </td>
            </tr>
            <tr>
                <td><?= $chute ?> x 1 = </td>
                <td><?= $chute * 1 ?> </td>
            </tr>

    <!-- aqui começa o while, Ele recebe o bloco html até a condição atender-->
        <?php 
            $i = 1;
            while ($i < 11):
        ?>

        <tr>
            <td><?= $chute ?> x <?= $i ?></td>
            <td>= <?= $chute * $i ?></td>
        </tr>

        <?php
        // altera o valor de i para que ele aumente a cada linha
        $i++;
            endwhile;
        ?>
        </tbody>
    </table>

</body>

</html>