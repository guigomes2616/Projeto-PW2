<?php 
    include '1-Header.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="2-Style-Projeto.css">
    <title>Questões da Grécia Antiga</title>
</head>

<body>

<h1>Grécia Antiga</h1>

<form action="1-Resultado-Grecia.php" method="post">

    <div class="divpergunt" id="divpergunt1">
        <p><label for="question1"><strong>1</strong> - A soberania dos cidadãos dotados de plenos direitos era imprescindível para a existência da cidade-estado. Segundo os regimes políticos, a proporção desses cidadãos em relação à população total dos homens livres podia variar muito, sendo bastante pequena nas aristocracias e oligarquias e maior nas democracias.
        <br>
        Nas cidades-estado da Antiguidade Clássica, a proporção de cidadãos descrita no texto é explicada pela adoção do seguinte critério para a participação política:</label></p>

        <input type="radio" name="quest1" class="question" id="q1_1"> Controle da terra.
        <br>
        <input type="radio" name="quest1" class="question" id="q1_2"> Liberdade de culto.
        <br>
        <input type="radio" name="quest1" class="question" id="q1_3"> Igualdade de gênero.
        <br>
        <input type="radio" name="quest1" class="question" id="q1_4"> Exclusão dos militares.
        <br>
        <input type="radio" name="quest1" class="question" id="q1_5"> Exigência da alfabetização.
        <br>
    </div>
        <br>
    <div class="divpergunt" id="divpergunt2">
        <p><label for="question2"><strong>2</strong> - Na Grécia, o conceito de povo abrange tão somente aqueles indivíduos considerados cidadãos. Assim é possível perceber que o conceito de povo era muito restritivo. Mesmo tendo isso em conta, a forma democrática vivenciada e experimentada pelos gregos atenienses nos séculos IV e V a.C. pode ser caracterizada, fundamentalmente, como direta.
        <br>
        Naquele contexto, a emergência do sistema de governo mencionado no excerto promoveu o(a):</label></p>
        
        <input type="radio" name="quest2" id="q2_1"> Competição para a escolha de representantes
        <br>
        <input type="radio" name="quest2" id="q2_2"> Campanha pela revitalização das oligarquias
        <br>
        <input type="radio" name="quest2" id="q2_3"> Estabelecimento de mandatos temporários
        <br>
        <input type="radio" name="quest2" id="q2_4"> Declínio da sociedade civil organizada
        <br>
        <input type="radio" name="quest2" id="q2_5"> Participação no exercício do poder
        <br>
        </div>
        <br>
    <div class="divpergunt" id="divpergunt3">
        <p><label for="question3"><strong>3</strong> - Quando se trata de competência nas construções e nas artes, os atenienses acreditam que poucos sejam capazes de dar conselhos. Quando, ao contrário, se trata de uma deliberação política, toleram que qualquer um fale, de outro modo não existiria a cidade.
        <br>
        De acordo com o texto, a atuação política dos cidadãos atenienses na Antiguidade Clássica tinha como característica fundamental o(a):</label></p>
        <input type="radio" name="quest3" id="q3_1"> Dedicação altruísta em ações coletivas
        <br>
        <input type="radio" name="quest3" id="q3_2"> Participação direta em fóruns decisórios
        <br>
        <input type="radio" name="quest3" id="q3_3"> Ativismo humanista em debates públicos
        <br>
        <input type="radio" name="quest3" id="q3_4"> Discurso formalista em espaços acadêmicos
        <br>
        <input type="radio" name="quest3" id="q3_5"> Representação igualitária em instâncias parlamentares.
        <br>
    </div>
        <br>
    <div class="divpergunt" id="divpergunt4">
        <p><label for="question4"><strong>4</strong> - Na antiga Grécia, o teatro tratou de questões como destino, castigo e justiça. Muitos gregos sabiam de cor inúmeros versos das peças dos seus grandes autores. Na Inglaterra dos séculos XVI e XVII, Shakespeare produziu peças nas quais temas como o amor, o poder, o bem e o mal foram tratados. Nessas peças, os grandes personagens falavam em verso e os demais em prosa. No Brasil colonial, os índios aprenderam com os jesuítas a representar peças de caráter religioso.
        <br>    
        Esses fatos são exemplos de que, em diferentes tempos e situações, o teatro é uma forma: </label></p>

        <input type="radio" name="quest4" id="q4_1"> De manipulação do povo pelo poder, que controla o teatro
        <br>
        <input type="radio" name="quest4" id="q4_2"> De diversão e de expressão dos valores e problemas da sociedade
        <br>
        <input type="radio" name="quest4" id="q4_3"> De entretenimento popular, que se esgota na sua função de distrair
        <br>
        <input type="radio" name="quest4" id="q4_4"> De manipulação do povo pelos intelectuais que compõem as peças
        <br>
        <input type="radio" name="quest4" id="q4_5"> De entretenimento, que foi superada e hoje é substituída pela televisão
        <br>
    </div>
        <br>
    <div class="divpergunt" id="divpergunt5">
        <p><label for="question5"><strong>5</strong> - "Mirem-se no exemplo, Daquelas mulheres de Atenas, Vivem pros seus maridos"
        <br>
        Os versos da composição remetem à condição das mulheres na Grécia antiga, caracterizada, naquela época, em razão de:</label></p>
        
        <input type="radio" name="quest5" id="q5_1"> Sua função pedagógica, exercida junto às crianças atenienses
        <br>
        <input type="radio" name="quest5" id="q5_2"> Sua importância na consolidação da democracia, pelo casamento
         <br>
        <input type="radio" name="quest5" id="q5_3"> Seu rebaixamento de status social frente aos homens
        <br>
        <input type="radio" name="quest5" id="q5_4"> Seu afastamento das funções domésticas em períodos de guerra
        <br>
        <input type="radio" name="quest5" id="q5_5"> Sua igualdade política em relação aos homens
        <br>
    </div>
</form>  
    <br>
    <input type="submit" value="Enviar" class="botao" id="enviar">
    <input type="reset" value="Limpar" class="botao" id="limpar">

    <?php 
        include '1-Rodape.php';
    ?>

</body>
</html> 