<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Análise de Faturamento Diário</title>
</head>
<body>
    <h2>Análise de Faturamento Diário</h2>
    <p>Informe o valor de vendas de cada dia da semana.</p>
    
    <form action="processar.php" method="POST">
        <?php
        $dias = ['Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado'];
        for ($i = 0; $i < 7; $i++):
        ?>
            <div>
                <label for="venda_<?= $i ?>"><?= $dias[$i] ?> (R$):</label>
                <input 
                    type="number" 
                    id="venda_<?= $i ?>" 
                    name="vendas[]" 
                    step="0.01" 
                    min="0" 
                    required
                >
            </div>
            <br>
        <?php endfor; ?>
        
        <button type="submit">Analisar Faturamento</button>
    </form>
</body>
</html>
