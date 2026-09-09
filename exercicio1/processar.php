<?php
// Verifica se o formulário foi enviado via POST e se os campos existem
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['valor'], $_POST['codigo'])) {
    
    // Recebe e converte os dados enviados pelo formulário
    $valor = (float) $_POST['valor'];
    $codigo = (int) $_POST['codigo'];

    // Define o percentual de desconto conforme o tipo de cliente
    switch ($codigo) {
        case 1:
            $tipoCliente = 'Cliente Comum';
            $percentual = 5;
            break;
        case 2:
            $tipoCliente = 'VIP';
            $percentual = 10;
            break;
        case 3:
            $tipoCliente = 'Funcionário';
            $percentual = 15;
            break;
        default:
            echo "<h1>Erro</h1>";
            echo "<p>Código de cliente inválido.</p>";
            echo "<br><a href='index.php'>Voltar ao formulário</a>";
            exit();
    }

    // Calcula o valor do desconto e o valor final a pagar
    $desconto = $valor * ($percentual / 100);
    $valorFinal = $valor - $desconto;

    // Exibe os resultados organizados
    echo "<h1>Resultado do Desconto</h1>";
    echo "<p><strong>Tipo de cliente:</strong> " . $tipoCliente . "</p>";
    echo "<p><strong>Valor total da compra:</strong> R$ " . number_format($valor, 2, ',', '.') . "</p>";
    echo "<p><strong>Percentual de desconto:</strong> " . $percentual . "%</p>";
    echo "<p><strong>Valor do desconto:</strong> R$ " . number_format($desconto, 2, ',', '.') . "</p>";
    echo "<p><strong>Valor final a pagar:</strong> R$ " . number_format($valorFinal, 2, ',', '.') . "</p>";
    echo "<br><a href='index.php'>Voltar ao formulário</a>";
} else {
    // Redireciona para o formulário caso tente acessar diretamente a página de processamento
    header("Location: index.php");
    exit();
}
?>
