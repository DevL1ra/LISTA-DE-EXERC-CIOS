<?php
// Verifica se o formulário foi enviado via POST e se os campos existem
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['lado_a'], $_POST['lado_b'], $_POST['lado_c'])) {
    
    // Recebe e converte os lados do triângulo
    $a = (float) $_POST['lado_a'];
    $b = (float) $_POST['lado_b'];
    $c = (float) $_POST['lado_c'];

    echo "<h1>Resultado da Classificação</h1>";
    echo "<p><strong>Lados informados:</strong> A = " . number_format($a, 2, ',', '.') .
         ", B = " . number_format($b, 2, ',', '.') .
         ", C = " . number_format($c, 2, ',', '.') . "</p>";

    // Verifica se os lados formam um triângulo válido
    if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {
        // Classifica o triângulo
        if ($a == $b && $b == $c) {
            $tipo = 'Equilátero (três lados iguais)';
        } elseif ($a == $b || $a == $c || $b == $c) {
            $tipo = 'Isósceles (dois lados iguais)';
        } else {
            $tipo = 'Escaleno (três lados diferentes)';
        }

        echo "<p><strong>Triângulo válido:</strong> Sim</p>";
        echo "<p><strong>Classificação:</strong> " . $tipo . "</p>";
    } else {
        echo "<p><strong>Triângulo válido:</strong> Não</p>";
        echo "<p>A soma de dois lados deve ser maior que o terceiro.</p>";
    }

    echo "<br><a href='index.php'>Voltar ao formulário</a>";
} else {
    // Redireciona para o formulário caso tente acessar diretamente a página de processamento
    header("Location: index.php");
    exit();
}
?>
