<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/calculadora//css//style.css">
    <title>Calculadora</title>

</head>

<body>
    <div class="calculadora">
        <div class="titulo"><h1>Calculadora</h1></div>

        <!-- Formulário (tudo aqui é enviado via POST) -->
        <form method="POST">

            <!-- Visor (mostra o que já foi clicado antes) -->
            <input class="display" type="text" name="visor" value="<?= $_POST['visor'] ?? '';  ?>">
           
            <!-- Linhas de botões -->
             <div>
                <button name="btn" value="7">7</button>
                <button name="btn" value="8">8</button>
                <button name="btn" value="9">9</button>
                <button name="btn" value="+">+</button>
             </div>

             <div>
                <button name="btn" value="4">4</button>
                <button name="btn" value="5">5</button>
                <button name="btn" value="6">6</button>
                <button name="btn" value="-">-</button>
             </div>

             <div>
                <button name="btn" value="1">1</button>
                <button name="btn" value="2">2</button>
                <button name="btn" value="3">3</button>
                <button name="btn" value="*">*</button>
             </div>

             <div>
                <button name="btn" value="0">0</button>
                <button name="btn" value="C">C</button>
                <button name="btn" value="/">/</button>
                <button name="btn" value=".">.</button>
                 <button name="btn" value="=">=</button>
            </div>
           
        </form>

        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") { // se algum botão foi clicado (envia o formulario)
            $visor = $_POST['visor'] ; // pego o que já tinha no visor
            $btn = $_POST['btn'] ; // pega o botão atual

            if ($btn == 'C') { // se botao C for selecionado faça:
                $visor = ''; //Limpa tudo
            } elseif ($btn == '=') {
                $visor = eval("return $visor;"); // faz o calculo (mesmo que o google)
            } else {
                $visor .= $btn; // só adiciona o botão pressionado ao visor
            }

            // atualiza o visor usando JS
            echo "<script>document.getElementsByName('visor')[0].value = '$visor'</script>";
        }


        ?>

    </div>

    <a href="/index.php"><button class="voltar">VOLTAR</button></a>
</body>

</html>