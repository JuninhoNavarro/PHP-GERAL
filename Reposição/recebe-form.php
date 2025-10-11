<?php
// $_POST guarda os dados quando enviados por POST
// $_SERVER guarda dados do servidor e da requisição
if($_SERVER['REQUEST_METHOD'] == 'POST') {

    // (echo) imprime na pagina, podemos usar html dentro do php
    echo "<h1>Formulário do Aluno Fatec</h1>";

    // $_POST guarda os dados quando enviados por POST
    // adicionamos as variaveis fora de aspas("") e separando os com o ponto (.)
    // atribuimos o valor da varial entre chaves [nome do id]

    // imprimindo o nome atribuido do formulario 
    echo "Nome: " . $_POST['nome'] . "<br>";
    // imprimindo o semestre atribuido do formulario 
    echo "Semestre atual: " . $_POST['semestre'] . " ° <br>";
    
    // criando uma variavel para guardar o valor do semestre 
    $semestreAtual = $_POST['semestre'];

    // criando uma variavel para guardar o valor total de semestre
    $totalSemestre = 6;

    // criando uma variavel para fazer a operação de quantos semestres faltam para determinar
    $semestreFaltam = $totalSemestre - $semestreAtual;
    
    // imprimindo quantos semestres faltam
    echo "Faltam  " . $semestreFaltam . " semestre(s)<br>";

    // imprimindo o numero da tabuada
    echo "Tabuada do: " . $_POST['numeroEscolhido'] . "<br>";

    // criando a varialvel numero escolhido e exibindo 
    $numeroEscolhido = $_POST['numeroEscolhido'];

    // se (verifica se numeroEscolhido) existe 
    if (isset($numeroEscolhido)) {
        // faça (laço de repetição de 0 até 10)
    for ($i = 0; $i <= 10; $i++) {
        $tabuada = 0;
        // exibe na tela a multiplicação do número escolhido por $i 
        echo "$tabuada = $numeroEscolhido x $i = " . ($numeroEscolhido * $i) . "<br>";
    }
        // se não
    } else {
        //imprime a mensagem para digitar um número
     echo "Digite um número!";
    }
}



?>

<!DOCTYPE html>

<!-- Define portugues do brasil-->
<html lang="pt-BR"> 

<!-- Cabeçario do sita, usuario não tem visão do conteudo diretamente -->
    <head>
        <!--Permite usar caracteres especiais-->
        <meta charset="UTF-8">

        <!--Deixa responsivo para outras plataformas/dispositivos-->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Titulo na url-->
        <title>Card com os resultados do Formulário</title>

        <!--link que possibilita o uso do bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>

    <!-- Corpo do site conteudo que o usuario vai interagir-->
    <body class="container">

        <!--Card com os valores das variaveis, estilização da estrutura  -->
        <div class="card" style="width: 18rem;">
            <!-- corpo com conteudo do card-->
            <div class="card-body">
                <!-- conteudos (variaveis) -->
                <p class="card-text">Nome: <?= $_POST['nome'] ?> </p>
                <p class="card-text">Semestre atual: <?= $semestreAtual ?> </p>
                <p class="card-text">Semestre(s) que faltam : <?= $semestreFaltam ?> </p>
                <p class="card-text">Tabuada do número:<?= $numeroEscolhido ?> </p>
                <p class="card-text"> <?= $tabuada ?> </p>
            </div>
        </div>
        
    </body>
</html> 