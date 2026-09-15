<?php
// Verifica se o formulário foi enviado via POST e se o vetor notas existe
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['notas'])) {
    
    // Armazena as 4 notas em um array
    $notas = $_POST['notas'];
    $totalNotas = count($notas);

    // Converte as notas para float
    for ($i = 0; $i < $totalNotas; $i++) {
        $notas[$i] = (float) $notas[$i];
    }

    // Calcula a média utilizando função de array
    $media = array_sum($notas) / $totalNotas;

    // Define a situação do aluno
    if ($media >= 7) {
        $situacao = 'Aprovado';
    } elseif ($media >= 5) {
        $situacao = 'Recuperação';
    } else {
        $situacao = 'Reprovado';
    }

    // Exibe os resultados organizados
    echo "<h1>Resultado da Avaliação</h1>";
    echo "<ul>";
    for ($i = 0; $i < $totalNotas; $i++) {
        echo "<li>Nota " . ($i + 1) . ": " . number_format($notas[$i], 1, ',', '.') . "</li>";
    }
    echo "</ul>";
    echo "<p><strong>Média:</strong> " . number_format($media, 2, ',', '.') . "</p>";
    echo "<p><strong>Situação:</strong> " . $situacao . "</p>";
    echo "<br><a href='index.php'>Voltar ao formulário</a>";
} else {
    // Redireciona para o formulário caso tente acessar diretamente a página de processamento
    header("Location: index.php");
    exit();
}
?>
