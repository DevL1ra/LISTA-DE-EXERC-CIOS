<?php
// Verifica se o formulário foi enviado via POST e se os campos existem
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nomes'], $_POST['nota1'], $_POST['nota2'])) {
    
    $nomes = $_POST['nomes'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];

    // Monta a matriz 3×3: [nome, nota1, nota2]
    $turma = [];
    for ($i = 0; $i < 3; $i++) {
        $turma[$i][0] = $nomes[$i];
        $turma[$i][1] = (float) $nota1[$i];
        $turma[$i][2] = (float) $nota2[$i];
    }

    // Exibe os resultados utilizando laços aninhados
    echo "<h1>Tabela de Notas da Turma</h1>";
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr><th>Aluno</th><th>Nota 1</th><th>Nota 2</th><th>Média</th></tr>";

    for ($i = 0; $i < 3; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 3; $j++) {
            if ($j == 0) {
                echo "<td>" . htmlspecialchars($turma[$i][$j]) . "</td>";
            } else {
                echo "<td>" . number_format($turma[$i][$j], 1, ',', '.') . "</td>";
            }
        }
        $media = ($turma[$i][1] + $turma[$i][2]) / 2;
        echo "<td>" . number_format($media, 2, ',', '.') . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "<br><a href='index.php'>Voltar ao formulário</a>";
} else {
    // Redireciona para o formulário caso tente acessar diretamente a página de processamento
    header("Location: index.php");
    exit();
}
?>
