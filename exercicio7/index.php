<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Média e Aprovação</title>
</head>
<body>
    <h2>Calculadora de Média e Aprovação</h2>
    
    <form action="processar.php" method="POST">
        <?php for ($i = 0; $i < 4; $i++): ?>
            <div>
                <label for="nota_<?= $i ?>">Nota <?= $i + 1 ?>:</label>
                <input 
                    type="number" 
                    id="nota_<?= $i ?>" 
                    name="notas[]" 
                    step="0.1" 
                    min="0" 
                    max="10" 
                    required
                >
            </div>
            <br>
        <?php endfor; ?>
        
        <button type="submit">Calcular Média</button>
    </form>
</body>
</html>
