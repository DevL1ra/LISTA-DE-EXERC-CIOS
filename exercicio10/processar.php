<?php
// Verifica se o formulário foi enviado via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Cria uma matriz quadrada 3×3 com números inteiros aleatórios
    $matriz = [];
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            $matriz[$i][$j] = rand(1, 99);
        }
    }

    // Calcula a soma dos elementos da diagonal principal (linha == coluna)
    $somaDiagonal = 0;
    for ($i = 0; $i < 3; $i++) {
        $somaDiagonal += $matriz[$i][$i];
    }

    // Exibe a matriz e o resultado
    echo "<h1>Matriz 3×3 Gerada</h1>";
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    for ($i = 0; $i < 3; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 3; $j++) {
            // Destaca visualmente a diagonal principal
            if ($i == $j) {
                echo "<td><strong>" . $matriz[$i][$j] . "</strong></td>";
            } else {
                echo "<td>" . $matriz[$i][$j] . "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";

    echo "<p><strong>Elementos da diagonal principal:</strong> " .
         $matriz[0][0] . " + " . $matriz[1][1] . " + " . $matriz[2][2] . "</p>";
    echo "<p><strong>Soma da diagonal principal:</strong> " . $somaDiagonal . "</p>";
    echo "<br><a href='index.php'>Gerar nova matriz</a>";
} else {
    // Redireciona para o formulário caso tente acessar diretamente a página de processamento
    header("Location: index.php");
    exit();
}
?>
