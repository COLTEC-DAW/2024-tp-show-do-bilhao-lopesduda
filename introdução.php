<?php 

$pergunta = [
    "Qual o time com maior número de copas do Brasil?",
    "Em que ano começou a Primeira Guerra Mundial?",
    "Quem foi conhecido como rei do pop?",
    "Qual tipo sanguíneo é considerado universal?"
];

$alternativas = [
    ["Corinthians", "Cruzeiro", "Flamengo", "São Paulo"],
    ["1914", "1939", "1918", "1945"],
    ["Prince", "Bruno Mars", "Elvis Presley", "Michael Jackson"],
    ["A+", "O", "AB+", "O-"]
];

$respostas = [1, 0, 3, 3];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo do Bilhão</title>
</head>
<body>
    <h1>Quiz Perguntas</h1>
    <?php
    
    for ($i = 0; $i < count($pergunta); $i++) {
        echo "<h2>" . $pergunta[$i] . "</h2>";
        echo "<ol>";
        foreach ($alternativas[$i] as $alternativa) {
            echo "<li>" . $alternativa . "</li>";
        }
        echo "</ol>";
    }
    ?>
</body>
</html>
