<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="2-Style-Projeto.css">
    <title>Gabarito</title>
</head>

<body>

<?php
    // Incluir o arquivo de cabeçalho
    include '1-Header.php';

    // Definir o gabarito com as respostas corretas e as perguntas correspondentes
    $gabarito = array(
        'quest1' => array('q1_1', '1'),
        'quest2' => array('q2_5', '2'), 
        'quest3' => array('q3_2', '3'), 
        'quest4' => array('q4_2', '4'), 
        'quest5' => array('q5_3', '5')  
    );

    // Verificar se o formulário foi submetido e se há respostas para processar
    if ($_SERVER["REQUEST_METHOD"] == "POST"  && !empty($_POST)) { 
        // Inicializar contadores para respostas corretas e incorretas
        $respostas_corretas = 0;
        $respostas_incorretas = 0;
        // Arrays para armazenar perguntas acertadas e erradas
        $perguntas_acertadas = array();
        $perguntas_erradas = array();

        // Iterar sobre as respostas submetidas pelo usuário
        foreach ($_POST as $questao => $resposta) {
            // Verificar se a questão está no gabarito
            if (isset($gabarito[$questao])) {
                // Comparar a resposta do usuário com o gabarito
                if ($resposta == $gabarito[$questao][0]) {
                    $respostas_corretas++;
                    $perguntas_acertadas[] = $gabarito[$questao][1]; // Armazenar número da pergunta acertada
                } else {
                    $respostas_incorretas++;
                    $perguntas_erradas[] = $gabarito[$questao][1]; // Armazenar número da pergunta errada
                }
            }
        }

        // Exibir o número de respostas corretas e incorretas
        echo "<h2>Você acertou $respostas_corretas de 5 perguntas e errou $respostas_incorretas.</h2>";

?>
        <div class="divGabarito" id="divAcertos">
            <?php
                echo "<h3>Perguntas acertadas:</h3>";
                foreach ($perguntas_acertadas as $pergunta) {
                    echo "<p>Pergunta $pergunta</p>";
                }
            ?>
        </div>
        
        <div class="divGabarito" id="divErros">
            <?php 
                echo "<h3>Perguntas erradas:</h3>";
                foreach ($perguntas_erradas as $pergunta) {
                    echo "<p>Pergunta $pergunta</p>";
                }
            ?>
        </div>
        <br>
        <button type="submit" class="btn btn-primary" id="botaoVoltar"><a href="2-Grecia.php">Voltar</a></button>
  </div>

<?php
    }   
    include '1-Rodape.php';
?>

</body>
</html>