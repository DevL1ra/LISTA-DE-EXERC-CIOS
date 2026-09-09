<?php
// Verifica se o formulário foi enviado via POST e se o vetor notas existe
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['notas'])) {
    
    // Recebe o vetor enviado pelo formulário HTML
    $notas = $_POST['notas'];
    
    $soma = 0;
    $acimaDaMedia = 0;
    $totalAlunos = count($notas);

    // 1. Percorre o vetor enviado para calcular a soma
    for ($i = 0; $i < $totalAlunos; $i++) {
        // Converte cada posição do vetor para float (segurança de tipo)
        $notas[$i] = (float) $notas[$i];
        $soma += $notas[$i];
    }

    // 2. Calcula a média geral da turma
    $media = $soma / $totalAlunos;

    // 3. Percorre o vetor novamente para contar quantos alunos ficaram acima da média
    for ($i = 0; $i < $totalAlunos; $i++) {
        if ($notas[$i] > $media) {
            $acimaDaMedia++;
        }
    }

    // 4. Exibe os resultados organizados
    echo "<h1>Resultado da Avaliação</h1>";
    echo "<ul>";
    for ($i = 0; $i < $totalAlunos; $i++) {
        echo "<li>Aluno " . ($i + 1) . ": Nota " . number_format($notas[$i], 1, ',', '.') . "</li>";
    }
    echo "</ul>";

    echo "<p><strong>Média geral da turma:</strong> " . number_format($media, 2, ',', '.') . "</p>";
    echo "<p><strong>Quantidade de alunos acima da média:</strong> " . $acimaDaMedia . "</p>";
    echo "<br><a href='index.php'>Voltar ao formulário</a>";
} else {
    // Redireciona para o formulário caso tente acessar diretamente a página de processamento
    header("Location: index.php");
    exit();
}
?>