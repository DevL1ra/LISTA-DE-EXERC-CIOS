<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Tabuada Personalizada</title>
</head>
<body>
    <h2>Tabuada Personalizada</h2>
    
    <form action="processar.php" method="POST">
        <div>
            <label for="numero">Informe um número inteiro:</label>
            <input type="number" id="numero" name="numero" step="1" required>
        </div>
        <br>
        
        <button type="submit">Gerar Tabuada</button>
    </form>
</body>
</html>
