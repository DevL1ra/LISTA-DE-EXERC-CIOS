<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de IMC com Categoria</title>
</head>
<body>
    <h2>Cálculo de IMC com Categoria</h2>
    
    <form action="processar.php" method="POST">
        <div>
            <label for="peso">Peso (kg):</label>
            <input type="number" id="peso" name="peso" step="0.01" min="0.01" required>
        </div>
        <br>
        
        <div>
            <label for="altura">Altura (m):</label>
            <input type="number" id="altura" name="altura" step="0.01" min="0.01" required>
        </div>
        <br>
        
        <button type="submit">Calcular IMC</button>
    </form>
</body>
</html>
