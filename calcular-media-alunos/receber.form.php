<?php 
//echo "<h1>olá, mundo</h1>";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['nome']) && !empty($_POST['nome'])){
        $nome = $_POST['nome'];
    } else {
        $nome = "Não Informado!";
    }
}

$nota1 = empty($_POST['nota1']) ? "Não Informado!" : $_POST['nota1'];
$nota2 = empty($_POST['nota2']) ? "Não Informado!" : $_POST['nota2'];

 $media = 0;

 $media = ($nota1 + $nota2)/2;

 if($media === 10) {
    echo "<br> Parabéns!! " . $nome . " ficou com média MÁXIMA!!! nota: " . $media;
 } elseif ($media >= 6){
    echo "<br> Aluno: " . $nome . " foi APROVADO! nota: " . $media;
 } elseif ($media >= 4) {
    echo "<br> Aluno: " . $nome . " ficou de RECUPERAÇÃO! nota: " . $media;
 } else {
    echo "<br> Aluno: " . $nome . " foi REPROVADO!! nota: " . $media;
 }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir</title>
</head>
<body>
    <br>   
    <a href="index.html"><button>Voltar</button></a>
</body>
</html>