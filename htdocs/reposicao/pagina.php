<!DOCTYPE html>
<html lang="pt-br"> <!-- Define portugues do brasil-->

<!-- Cabeçario do sita, usuario não tem visão do conteudo diretamente -->

<head>
    <!--Permite usar caracteres especiais-->
    <meta charset="UTF-8">
    <!--Deixa responsivo para outras plataformas/dispositivos-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Titulo na url-->
    <title>Formulário dos alunos da FATEC Jaú</title>
    <!--link que possibilita o uso do bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- linka o css (usamos css na tag <STYLE> pedido pelo professor)
    <link href="/css/style.css" rel="stylesheet"> 
    -->
    <!-- usaremos o style com a tag STYLE por meio do head -->
    <style>
        * {
            /*zerando as margin e o padding da página inteira*/
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        body {
            /*colocando uma cor de fundo no corpo da página*/
            background: rgba(222, 228, 235, 1);
        }

        button {
            /*colocando uma margin do botão ao input*/
            margin-top: 5px;
        }

        #container h1 {
            /*centraliza o titulo da página*/
            text-align: center;
        }


        body h1 {
            text-align: center;
            /*alinhando o texto ao centro*/
            margin-top: 10px;
            /*colocando uma margin de cima pro titulo*/
            font-family: monospace;
            /*adicionando essa font*/
            color: rgba(2, 75, 148, 1);
            /*colocando cor no texto */
        }
    </style>
</head>

<!-- Corpo do site conteudo que o usuario vai interagir-->
<body>
    <div class="container">

        <h1>Formulário dos alunos da FATEC</h1>

        <form method="POST" action="recebe-post.php">

            <div class="mb-3">
                <label for="nome" name="nome" class="form-label">Informe seu nome:</label>
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite seu nome aqui..">
            </div>

            <div class="mb-3">
                <label for="semestre" name="semestre" class="form-label">Informe o seu semestre atual:</label>
                <select for="semestre" class="form-select" name="semestre" id="semestre">
                    <option selected>Qual semestre você está? </option>
                    <option value="1">1°</option>
                    <option value="2">2°</option>
                    <option value="3">3°</option>
                    <option value="4">4°</option>
                    <option value="5">5°</option>
                    <option value="6">6°</option>
                </select>
            </div>

            <!-- divisão do formulario (Escolha um número)-->
            <div class="mb-3">
                <label for="nome" class="form-label">Informe um número de 1 ao 10: </label>
                <select for="numeroEscolhido" class="form-select" name="numeroEscolhido">
                    <option selected>Escolha um número de 1 a 10 </option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>

            

            <button type="reset" class="btn btn-warning">LIMPAR</button>

            <button type="submit" class="btn btn-success">ENVIAR</button>

        </form>
        <a href="/index.php"><button class="btn btn-primary">VOLTAR</button></a>
    </div>
</body>

</html>