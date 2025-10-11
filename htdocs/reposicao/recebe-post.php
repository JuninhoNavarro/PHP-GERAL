<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Resposta do Formulário dos alunos da FATEC</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
       body {
            background-color: #f0f2f5;
            font-family: 'Segoe UI', sans-serif;
            padding: 40px;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 40px;
            flex-wrap: wrap;
        }

        .card {
            width: 300px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-body {
            padding: 25px;
        }

        .card h4{
            text-align: center;
            color: #fff;
            background: #007bff;
            border-radius: 10px 10px 0px 0px;
        }

        .card-text {
            margin-bottom: 10px;
            color: #333;
        }

        table {
            border-collapse: collapse;
            width: 300px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        h2 {
            padding: 10px;
            margin: 10px;
            margin-bottom: 15px;
            color: #007bff;
        }
    </style>
</head>

<body>
    <?php
    $_POST['nome'];
    $semestreAtual = $_POST['semestre'];
    $totalSemestre = 6;
    $semestreFaltam = $totalSemestre - $semestreAtual;
    ?>

    <div class="conteiner"  style="width: 18rem;">
        <!--Card com os valores das variaveis, estilização da estrutura  -->
        <div class="card">
            <h4>Dados do Aluno</h4>
            <!-- corpo com conteudo do card-->
            <div class="card-body">
                <!-- conteudos (variaveis) -->
                <p class="card-text">Nome: <?= $_POST['nome'] ?> </p>
                <p class="card-text">Semestre atual: <?= $semestreAtual ?> </p>
                <p class="card-text">Semestre(s) que faltam : <?= $semestreFaltam ?> </p>
            </div>

        </div>
    </div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST["numeroEscolhido"];

            echo "<h2>Tabuada do $numero</h2>";
            echo "<table>";
            echo "<tr><th>Multiplicação</th><th>Resultado</th></tr>";

            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<tr><td>$numero x $i</td><td>$resultado</td></tr>";
            }

            echo "</table>";
        }
        ?>
    </div>
</body>

</html>