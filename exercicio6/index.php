<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Estatística de Alturas</title>
</head>
<body>
    <h2>Estatística de Alturas</h2>
    <p>Informe a idade e a altura de 10 pessoas.</p>
    
    <form action="processar.php" method="POST">
        <?php for ($i = 0; $i < 10; $i++): ?>
            <div>
                <strong>Pessoa <?= $i + 1 ?>:</strong>
                <label for="idade_<?= $i ?>">Idade:</label>
                <input 
                    type="number" 
                    id="idade_<?= $i ?>" 
                    name="idades[]" 
                    min="1" 
                    required
                >
                <label for="altura_<?= $i ?>">Altura (m):</label>
                <input 
                    type="number" 
                    id="altura_<?= $i ?>" 
                    name="alturas[]" 
                    step="0.01" 
                    min="0.01" 
                    required
                >
            </div>
            <br>
        <?php endfor; ?>
        
        <button type="submit">Calcular Estatísticas</button>
    </form>
</body>
</html>
