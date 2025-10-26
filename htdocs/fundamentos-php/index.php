<!-- um arquivo PHP começa com '<?php 'e termina com' ?>' -->

<?php 
// echo exibe a mensagem na página
echo "Olá, mundo! <br>";


// <!-- em PHP, as variáveis são prefixadas com o símbolo $ e tipadas dinamicamente: -->
 
 $nome = "José"; // STRING
 $idade = 23; // INTEIRO
 $altura = 1.72; // PONTO FLUTUANTE
 $estudante = true; // BOOLEANO
 $notas = [8.5, 9.0, 7.5]; // ARRAY
 $pessoa = null; // NULL
 

//  Exibição de variáveis 
echo "Nome: $nome, Idade: $idade, Altura: $altura m";
// Saída: Nome: Jose, Idade: 23, Altura: 1.72 m

// Concatenação com operador "."
echo "<br>Aluno " . $nome . " tem " . $idade . " anos.";
// Saída: Aluno Jose tem 23 anos.

// variável global
$x = 6;
// Para variáveis globais dentro de funções:
function teste() {
    global $x;
    echo "<br>teste variável global: $x";

    // Alternativa: Array $globals
    echo "<br>teste array GLOBALS: " .$GLOBALS['x']; // Também funciona!
}
teste();
echo "<br>Contador: ";
// Variáveis estáticas: mantêm seus valores entre chamadas de função
function contador() {
    static $contador =0;
    $contador++ ;
    echo " N°: $contador, ";
}
contador(); // Exibe: 1
contador(); // Exibe: 2
contador(); // Exibe: 3


// Verificando o tipo de uma variável
$valor = 42;
echo "<br> a variável $valor é do tipo: " . gettype($valor) . "<br>";

// Verificação de tipo
 var_dump(is_int($valor)); // bool(true)
 var_dump(is_string($valor)); //bool(false)

// Conversão de tipo (casting)
$numero1 = 3.14;
echo "<br>Numero flutuante: " . $numero1;
$inteiro = (int)$numero1;
echo "<br>Número flutuante transformado em Número inteiro: "; var_dump($inteiro);

$texto = "42";
echo "<br>texto: "; var_dump($texto);
$numero2 = (int)$texto;
echo "<br> texto transformado em número: "; var_dump($numero2);

// Estruturas Condicionais
$nota = 85;

// Estrutura  IF simples
if ($nota >= 60) {
    echo "<br>Sua nota é $nota, está Aprovado!";
} 

// Estrutura IF-ELSE
if($nota >= 60) {
    echo "<br>Sua nota é $nota, está Aprovado!";
} else {
    echo "<br>Sua nota é $nota, está Reprovado!";
}
echo "<br>";
// Estrutura IF-ELSEIF-ELSE
if($nota >= 90){
    echo "Conceito A";
    } elseif ($nota >= 80) {
        echo "Conceito B";
    } elseif ($nota >= 70) {
        echo "Conceito C";
    } elseif ($nota >= 60) {
        echo "Conceito D";
    } else {
        echo "Conceito F";
    }

// Operador Ternário
$idade = 20;

//Formato: condição ? valor_verdadeiro : valor_se_falso
$status = "Você é ".($idade >= 18) ? "Maior de idade" : "Menor de idade";
echo "<br> Você é $status <br>";

//Operador de coalescência nula (PHP 7+)
// $nome = $_GET['nome'] ?? "Visitante";
// Equivalente a: $nome = isset($_GET['nome]) ? $_GET['nome'] : "Visitante";


// SWITCH
$dia = 3;
Echo "Qual dia da semana é: ";

switch($dia) {
    case 1:
        echo "Domingo";
        break;
    case 2:
        echo "Segunda-feira";
        break;
    case 3:
        echo "Terça-feira";
        break;
    case 4:
        echo "Quarta-feira";
        break;
    case 5:
        echo "Quinta-feira";
        break;
    case 6:
        echo "Sexta-feira";
        break;
    case 7:
        echo "Sábado";
        break;
    default:
    echo "Dia inválido";
}

// Arrays
// Arrays indexados
$frutas = ["Maçã", "Banana", "Laranja"];
// forma alternativa de declaração
$frutas = array("Maçã", "Banana", "Laranja");
// Acessando elementos do array
echo "<br>Qual item esta na lista na posição[0] : ". $frutas[0]; // Exibe: Maçã
// Adicionando elementos
array_push($frutas, "Morango");
// Contando elementos
echo "<br>Numeros de frutas na lista: " . count ($frutas); // Exibe: 4
// Verificando se um valor existe
if(in_array("Banana", $frutas)){
    echo "<br>verificando se um valor existe na lista: ";
    echo "Banana está no array!";
}
// Econtrando o índice de um valor
$indice = array_search("Laranja", $frutas);
echo "<br> valor do índice da lista de um determinado item: " . $indice; // Exibe: 2

// LOOP FOR BÁSICO
echo "<br>LOOP com FOR:";
for ($i = 1; $i <= 5; $i++){
    echo " $i, ";
}
echo "<br>";
//LOOP FOR com um Array
$frutas = [" Maça", " Banana", " Laranja", " Uva", " Morango"];
echo "Lista no LOOP com FOR: ";
for ($i = 0; $i < count($frutas); $i++){
    echo " " . $frutas[$i] . ", ";
}

// LOOP WHILE Básico
echo "<br>LOOP com WHILE: ";
$contador = 1;
while($contador <= 3) {
    echo " $contador ,";
    $contador++;
}

// sintaxe alternativa
echo "<br>LOOP com WHILE sintaxe alternativa: ";
$contador = 1;
while($contador <= 3):
    echo " $contador, ";
    $contador++;
endwhile;

// DO-WHILE
// Loop do-while (executado pelo menos uma vez)
echo "<br>LOOP com DO-WHILE: ";
$contador = 1;
do {
    echo " $contador, ";
    $contador++;
} while ($contador <= 3);
// saida: 1 2 3 4 5

//Exemplo do Loop que sempre executa pelo menos uma vez
$numero = 10;
do {
    echo "<br>DO-WHILE é um Loop que sempre é executa pelo menos uma vez: Este texto será exibido uma vez!";
} while ($numero < 5);

echo "<br>FOREACH: ";
// FOREACH : PARA CADA VEZ
$cores = ["Vermelho", "Verde", "Azul"];
foreach ($cores as $cor)  {
    echo " $cor, ";
}

echo "<br>";
// iterando sobre um array associativo
$pessoa = [
    "Nome" => "José",
    "Idade" => "23",
    "Profissão" => "Programador",
];

foreach ($pessoa as $chave => $valor){
    echo " $chave: $valor <br>";
}

?>