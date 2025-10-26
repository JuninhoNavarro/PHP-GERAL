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
    echo "<br> <p style='color: green;'> Parabéns!! " . $nome . " ficou com média MÁXIMA!!! NOTA: " . $media . "</p>";
 } elseif ($media >= 6){
    echo "<br> <p style='color: blue;'> Aluno: " . $nome . " foi APROVADO! NOTA: " . $media . "</p>";
 } elseif ($media >= 4) {
    echo "<br> <p style='color: yellow;'> Aluno: " . $nome . " ficou de RECUPERAÇÃO! <br> NOTA: " . $media . "</p>";
 } else {
    echo "<br> <p style='color: red;'> Aluno: " . $nome . " foi REPROVADO!! <br>NOTA: " . $media . "</p>";
 }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <br>  
    <div class="container"> 
         <a href="index.html"><button class="btn btn-primary">Voltar</button></a>
    </div>
</body>
</html>