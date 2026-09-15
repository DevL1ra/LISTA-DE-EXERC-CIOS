<?php
// Verifica se o formulário foi enviado via POST e se o vetor vendas existe
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['vendas'])) {
    
    // Cria o vetor com os valores de vendas dos 7 dias
    $dias = ['Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado'];
    $vendas = $_POST['vendas'];
    $totalDias = count($vendas);

    // Converte valores e calcula o total da semana
    $total = 0;
    for ($i = 0; $i < $totalDias; $i++) {
        $vendas[$i] = (float) $vendas[$i];
        $total += $vendas[$i];
    }

    $media = $total / $totalDias;

    // Identifica o dia com maior faturamento e quantos dias ficaram acima da média
    $maiorValor = $vendas[0];
    $diaMaior = $dias[0];
    $diasAcimaMedia = 0;

    for ($i = 0; $i < $totalDias; $i++) {
        if ($vendas[$i] > $maiorValor) {
            $maiorValor = $vendas[$i];
            $diaMaior = $dias[$i];
        }
        if ($vendas[$i] > $media) {
            $diasAcimaMedia++;
        }
    }

    // Exibe os resultados organizados
    echo "<h1>Análise de Faturamento</h1>";
    echo "<ul>";
    for ($i = 0; $i < $totalDias; $i++) {
        echo "<li>" . $dias[$i] . ": R$ " . number_format($vendas[$i], 2, ',', '.') . "</li>";
    }
    echo "</ul>";
    echo "<p><strong>Valor total vendido na semana:</strong> R$ " . number_format($total, 2, ',', '.') . "</p>";
    echo "<p><strong>Dia com maior faturamento:</strong> " . $diaMaior .
         " (R$ " . number_format($maiorValor, 2, ',', '.') . ")</p>";
    echo "<p><strong>Média semanal:</strong> R$ " . number_format($media, 2, ',', '.') . "</p>";
    echo "<p><strong>Dias acima da média:</strong> " . $diasAcimaMedia . "</p>";
    echo "<br><a href='index.php'>Voltar ao formulário</a>";
} else {
    // Redireciona para o formulário caso tente acessar diretamente a página de processamento
    header("Location: index.php");
    exit();
}
?>
