<!DOCTYPE html>
<html lang="pt-br"> <!-- Define portugues do brasil-->

<!-- Cabeçario do sita, usuario não tem visão do conteudo diretamente -->

<head>
    <!--Permite usar caracteres especiais-->
    <meta charset="UTF-8">
    <!--Deixa responsivo para outras plataformas/dispositivos-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Titulo na url-->
    <title> Formulário Reposição e Revisão</title>
    <!--link que possibilita o uso do bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    <!-- linka o css (usamos css na tag <STYLE> pedido pelo professor)
    <link href="/css/style.css" rel="stylesheet"> 
    -->
</head>

<!-- Corpo do site conteudo que o usuario vai interagir-->
<body>

    <!-- Formulario (action="envia os inputs pro recebe-form.php) com o metodo (method="POST)-->
    <!-- adicionando css no formulario-->
    <form class="container" action="recebe-form.php" method="POST"
    style="max-width: 960px; display: block; flex-wrap: wrap ;">

        <!-- divisão do formulario (digite su nome)-->
        <!-- adicionando padding e margin-->
        <div class="mb-3" style="padding: 5px; margin: 5px;">
            <label for="nome" class="form-label">Digite Seu Nome </label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite aqui seu Nome: ">
        </div>


        <!-- divisão do formulario (Qual semestre)-->
        <!-- adicionando padding e margin-->
        <div class="mb-3" style="padding: 5px; margin: 5px;">
        <label for="semestre" class="form-label">Informe seu semetre atual: </label>
        <select for="semestre" class="form-select" name="semestre">
            <option selected>Qual semestre você está? </option>
            <option value="1">1°</option>
            <option value="2">2°</option>
            <option value="3">3°</option>
            <option value="4">4°</option>
            <option value="5">5°</option>
            <option value="6">6°</option>
        </select>
        </div>
           <!-- Outra forma de fazer escolha dos semestre
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">1</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
             <label class="form-check-label" for="inlineCheckbox2">2</label>
        </div>
        -->

        <!-- divisão do formulario (Escolha um número)-->
         <div class="mb-3" style="padding: 5px; margin: 5px;">
        <label for="nome" class="form-label">Informe um número de 1 ao 10:  </label>
        <select for="numeroEscolhido" class="form-select" name="numeroEscolhido" >
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
        <div class="mb-3" style="display: flex; padding: 15px; margin: 15px; justify-content: flex-first; gap: 20px">
        <!--Botão de limpar o formulario-->
        <button type="reset" class="btn btn-warning">LIMPAR</button> 
        <!--Botão de enviar o formulario-->
        
        <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>

<!-- linka o javascript  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>