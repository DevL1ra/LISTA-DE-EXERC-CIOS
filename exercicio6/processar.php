<?php
// Verifica se o formulário foi enviado via POST e se os vetores existem
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['idades'], $_POST['alturas'])) {
    
    // Recebe os vetores enviados pelo formulário
    $idades = $_POST['idades'];
    $alturas = $_POST['alturas'];
    $total = count($idades);

    $maiorAltura = (float) $alturas[0];
    $menorAltura = (float) $alturas[0];
    $somaAlturasMaiores = 0;
    $qtdMaiores = 0;

    // Percorre o conjunto de 10 pessoas
    for ($i = 0; $i < $total; $i++) {
        $idade = (int) $idades[$i];
        $altura = (float) $alturas[$i];

        if ($altura > $maiorAltura) {
            $maiorAltura = $altura;
        }
        if ($altura < $menorAltura) {
            $menorAltura = $altura;
        }

        // Soma alturas das pessoas com mais de 18 anos
        if ($idade > 18) {
            $somaAlturasMaiores += $altura;
            $qtdMaiores++;
        }
    }

    // Exibe os resultados organizados
    echo "<h1>Resultado das Estatísticas</h1>";
    echo "<p><strong>Maior altura do grupo:</strong> " . number_format($maiorAltura, 2, ',', '.') . " m</p>";
    echo "<p><strong>Menor altura do grupo:</strong> " . number_format($menorAltura, 2, ',', '.') . " m</p>";

    if ($qtdMaiores > 0) {
        $media = $somaAlturasMaiores / $qtdMaiores;
        echo "<p><strong>Média de altura (maiores de 18 anos):</strong> " . number_format($media, 2, ',', '.') . " m</p>";
        echo "<p><strong>Quantidade de pessoas com mais de 18 anos:</strong> " . $qtdMaiores . "</p>";
    } else {
        echo "<p><strong>Média de altura (maiores de 18 anos):</strong> nenhuma pessoa com mais de 18 anos informada.</p>";
    }

    echo "<br><a href='index.php'>Voltar ao formulário</a>";
} else {
    // Redireciona para o formulário caso tente acessar diretamente a página de processamento
    header("Location: index.php");
    exit();
}
?>
