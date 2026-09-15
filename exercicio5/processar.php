<?php
// Verifica se o formulário foi enviado via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Valores fixos da simulação
    $saldo = 1000.00;
    $taxa = 0.015; // 1,5% ao mês
    $meses = 12;

    echo "<h1>Simulação de Juros Compostos</h1>";
    echo "<p><strong>Investimento inicial:</strong> R$ " . number_format($saldo, 2, ',', '.') . "</p>";
    echo "<p><strong>Taxa mensal:</strong> 1,5%</p>";
    echo "<p><strong>Período:</strong> 12 meses</p>";
    echo "<ul>";

    // Laço de repetição para exibir o rendimento mês a mês
    for ($mes = 1; $mes <= $meses; $mes++) {
        $rendimento = $saldo * $taxa;
        $saldo += $rendimento;

        echo "<li>Mês " . $mes . ": rendimento de R$ " . number_format($rendimento, 2, ',', '.') .
             " | saldo acumulado: R$ " . number_format($saldo, 2, ',', '.') . "</li>";
    }

    echo "</ul>";
    echo "<p><strong>Saldo final acumulado:</strong> R$ " . number_format($saldo, 2, ',', '.') . "</p>";
    echo "<br><a href='index.php'>Voltar</a>";
} else {
    // Redireciona para o formulário caso tente acessar diretamente a página de processamento
    header("Location: index.php");
    exit();
}
?>
