<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="slide_show.css">
    <title>SLIDE_SHOW</title>
</head>
<body>
    <div class="FULL_SLIDE">
        <div class="SLIDE_1">
            <div class="estilo_ne_C"> </div>
            <div class="estilo_ne_CC"> </div>
            <div class="estilo_ne_CCC"> </div>
                <div class="stars">
                    <h1 class="stars"> STARS</h1>
                </div>
                <div class="textosss">
                    <p class="textttt">As estrelas, os brilhantes pontos de luz que pontuam o vasto manto do céu noturno, têm encantado e inspirado a humanidade desde tempos imemoriais. Elas cativam nossa imaginação, despertam curiosidade e alimentam reflexões profundas sobre o mistério e a vastidão do universo. Esses corpos celestes fascinantes desempenham um papel crucial na formação e na evolução do cosmos, além de desempenharem um papel simbólico em inúmeras culturas ao redor do mundo.</p>
                </div>
                <?php
                    include "conexao.php";
                        $sql = "SELECT local_imagens FROM img WHERE IMG_id = 2";
                        $resultado = mysqli_query($conexao, $sql);
                        $linha = mysqli_fetch_assoc($resultado);
                ?>
                <img src="<?php echo $linha['local_imagens']; ?>" alt=''>
        </div>

        <div class="SLIDE_2">
            <div class="estilo_ne_b"> </div>
            <div class="estilo_ne_bb"> </div>
            <div class="estilo_ne_bbb"> </div>
            <div class="textoup">
                <h1 class="colors">COLORS</h1>
            </div>
                <div class="textoup2">
                    <p class="yellow">
                        As cores têm um poder único de evocar emoções profundas dentro de nós. Do calor reconfortante do vermelho à serenidade refrescante do azul, cada matiz tem o potencial de influenciar nosso humor e estado de espírito.</p>
                    <p >
                        Ao contemplarmos um amarelo radiante, podemos sentir a alegria borbulhar em nosso interior, enquanto tons suaves de verde nos conectam com a natureza e nos transmitem uma sensação de harmonia. 
                    </p>
                </div>
                <?php
                    include "conexao.php";
                        $sqls = "SELECT local_imagens FROM img WHERE IMG_id = 1";
                        $resultado = mysqli_query($conexao, $sqls);
                        $linhas = mysqli_fetch_assoc($resultado);
                ?>
            <img src="<?php echo $linhas['local_imagens']; ?>" alt="multicolor">
        </div>

    </div>
</body>
</html>