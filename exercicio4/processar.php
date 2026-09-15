<?php
// Verifica se o formulário foi enviado via POST e se o campo existe
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['numero'])) {
    
    // Recebe e converte o número
    $numero = (int) $_POST['numero'];

    // Exibe a tabuada do 1 ao 10 utilizando for
    echo "<h1>Tabuada do " . $numero . "</h1>";
    echo "<ul>";
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "<li>" . $numero . " x " . $i . " = " . $resultado . "</li>";
    }
    echo "</ul>";
    echo "<br><a href='index.php'>Voltar ao formulário</a>";
} else {
    // Redireciona para o formulário caso tente acessar diretamente a página de processamento
    header("Location: index.php");
    exit();
}
?>
