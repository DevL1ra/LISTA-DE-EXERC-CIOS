<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lançamento de Notas da Turma</title>
</head>
<body>
    <h2>Informe a nota dos 5 alunos</h2>
    
    <form action="processar.php" method="POST">
        <?php for ($i = 0; $i < 5; $i++): ?>
            <div>
                <label for="nota_<?= $i ?>">Nota do Aluno <?= $i + 1 ?>:</label>
                <!-- O name "notas[]" envia os dados como um vetor numerado para o PHP -->
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