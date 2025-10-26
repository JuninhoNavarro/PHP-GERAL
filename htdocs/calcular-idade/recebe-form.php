<?php
// echo "<h1>Olá, mundo</h1>"; 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // $nome = isset($_POST['nome']) && !empty($_POST['nome']);

    $nome = empty($_POST['nome']) ? "Não informado" : $_POST['nome'];
    // varial recebe false ? 'não informado" : se verdadeiro pega o valor do form
    $ano_nasc = empty($_POST['ano_nasc']) ? "Não informado" : $_POST['ano_nasc'];

    $ano_atual = 2025;
    $idade = $ano_atual - $ano_nasc;

    echo "Nome: " . $nome . "<br>";
    echo "Você tem " . $idade . " anos.";
}
?>

<!-- falta acertar o jeito que recebe a variavel por POST e colocar em um card-->