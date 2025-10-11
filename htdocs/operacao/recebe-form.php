<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST["numero"];
    $numero2 = $_POST["numero2"];
    $operacao = $_POST["operacao"];
    $resultado = 0;
    
    if ($operacao == "+") {
        echo "Resultado da adição é: " . $resultado = $numero1 + $numero1;
    } 
    elseif ($operacao == "-") {
        echo "Resultado da subtração é: " . $resultado = $numero1 - $numero2;
    }
    elseif ($operacao == "*") {
        echo "Resultado da multiplicação é: " . $resultado = $numero1 * $numero2;
    }
    elseif ($operacao == "/") {
        echo "Resultado da divisão é: " . $resultado = $numero1 / $numero2;
    }
    elseif ($operacao == "%") {
        echo "Resultado do módulo é: " . $resultado = $numero1 % $numero2;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário das Operações</title>
</head>
<body>
            <a href="/operacao/index.php"><button>Voltar</button></a>
</body>
</html>