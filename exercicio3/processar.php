<?php
// Verifica se o formulário foi enviado via POST e se os campos existem
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['peso'], $_POST['altura'])) {
    
    // Recebe e converte peso e altura
    $peso = (float) $_POST['peso'];
    $altura = (float) $_POST['altura'];

    // Calcula o IMC (peso / altura²)
    $imc = $peso / ($altura * $altura);

    // Classifica o IMC
    if ($imc < 18.5) {
        $categoria = 'Abaixo do peso';
    } elseif ($imc < 25) {
        $categoria = 'Peso normal';
    } elseif ($imc < 30) {
        $categoria = 'Sobrepeso';
    } else {
        $categoria = 'Obesidade';
    }

    // Exibe os resultados organizados
    echo "<h1>Resultado do IMC</h1>";
    echo "<p><strong>Peso:</strong> " . number_format($peso, 2, ',', '.') . " kg</p>";
    echo "<p><strong>Altura:</strong> " . number_format($altura, 2, ',', '.') . " m</p>";
    echo "<p><strong>IMC:</strong> " . number_format($imc, 2, ',', '.') . "</p>";
    echo "<p><strong>Classificação:</strong> " . $categoria . "</p>";
    echo "<br><a href='index.php'>Voltar ao formulário</a>";
} else {
    // Redireciona para o formulário caso tente acessar diretamente a página de processamento
    header("Location: index.php");
    exit();
}
?>
