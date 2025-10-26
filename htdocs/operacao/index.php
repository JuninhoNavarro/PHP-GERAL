<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando as Operações</title>
    <link rel="stylesheet" href="css/style.css">
    <!--link que possibilita o uso do bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
</head>

<body>
    <div class="container">
        <h1>Usando os Operadores Básicos</h1>
        <form method="POST" action="recebe-form.php">

            <div class="mb-3">
                <label for="numero" class="form-label">Informe um número:</label>
                <input type="number" class="form-control" id="numero" name="numero" placeholder="Digite aqui ...">
            </div>

            <div class="mb-3">
                <label for="numero2" class="form-label">Informe outro número:</label>
                <input type="number" class="form-control" id="numero2" name="numero2" placeholder="Digite aqui ...">
            </div>

            <div class="mb-3">
                <label for="opercao" class="from-label">Escolha uma operação:</label>
                <select name="operacao" id="operacao">
                    <option value="+">Adição</option>
                    <option value="-">Subtração</option>
                    <option value="*">Multiplicação</option>
                    <option value="/">Divisão</option>
                    <option value="%">Módulo</option>
                </select>
            </div>

            <button type="reset" class="btn btn-danger">LIMPAR</button>
            <button type="submit" class="btn btn-success">ENVIAR</button>

        </form>
        <a href="/index.php"><button class="btn btn-primary" style="margin-top: 10px;">VOLTAR</button></a>
    </div>

</body>

</html>