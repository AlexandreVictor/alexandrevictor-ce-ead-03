
<?php
                $nomealuno =  $_POST['nomealuno'];
                $notava1 = $_POST['notava1'];
                $notava2 = $_POST['notava2'];
                $notava3 = $_POST['notava3'];
                $notatrabalho = $_POST['notatrabalho'];
                $nomedisciplina = $_POST['nomedisciplina'];
                $nomecurso = $_POST['nomecurso'];
                $imagemfaculdade = $_POST['imagemfaculdade'];
                $nmprofessor = $_POST['nmprofessor'];
                $nmcoordenador = $_POST['nmcoordenador'];
                $totalnota=(float)$notava1+$notava2+$notava3+$notatrabalho;
                $desempenho;

                        
                $resultado = ($totalnota >=60) ? 'concluiu' :'<strong>NÃO</strong> concluiu';
                    if ($totalnota >=90)
                    {
                        $desempenho = 'Excelente';
                    }
                    elseif($totalnota >=80)
                    {
                        $desempenho = 'Ótimo';
                    }
                    elseif($totalnota >=70)
                    {
                        $desempenho = 'Bom';
                    }
                    elseif($totalnota >=60)
                    {
                        $desempenho = 'Ruim';
                    }
                    else
                    {
                        $desempenho = 'Péssimo';
                    }
    
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/Estilo.css">
    <title>Declaração de Resultados</title>
</head>
    <body class=""  >
    <img src=<?php echo $imagemfaculdade ?> alt="logo faculdade" title="logo faculdade">    
        <h2 class="titulos">Declaração</h2>
       <!--  <h2 class="titulos"><?php echo $totallinhas ?></h2> -->
        <p>Declaramos, para os fins, que <?php echo $nomealuno ?> <?php echo $resultado ?> satisfatoriamente as atividades da disciplina 
        <?php echo $nomedisciplina ?> do curso de <?php echo $nomecurso ?>.
        <p>Segue o desempenho de  <?php echo $nomealuno ?>:</p>
        <div>
            <table border="1px solid" >
                <th class="cinza">Critério</th>
                <th class="cinza">Valor Total</th>
                <th class="cinza">Nota Aluno</th>
                <th class="cinza">Desempenho(%)</th>            
                <tr>
                    <td>Prova 1</td>
                    <td>15</td>
                    <td><?php echo $notava1 ?></td>
                    <td><?php echo round(($notava1/15)*100,2),'%' ?></td>
                </tr>
                <tr class="cinza">
                    <td>Prova 2</td>
                    <td>25</td>
                    <td><?php echo $notava2 ?></td>
                    <td><?php echo round(($notava2/25)*100,2),'%' ?></td>
                </tr>
                <tr>
                    <td>Prova 3</td>
                    <td>35</td>
                    <td><?php echo $notava3 ?></td>
                    <td><?php echo round(($notava3/35)*100,2),'%' ?></td>
                </tr>
                <tr class="cinza">
                    <td>Trabalhos</td>
                    <td>25</td>
                    <td><?php echo $notatrabalho ?></td>
                    <td><?php echo round((($notatrabalho/25)*100),2),'%' ?></td>
                </tr>
            </table>
                
        </div>
        <p>Com esse resultado, o conceito de <?php echo $nomealuno ?> foi <i><?php echo $desempenho ?></i>, já que sua nota foi de <b><?php echo $totalnota ?></b> pontos.</p>
        <p class="Centro">Belo Horizonte, <?php echo $DataAtual = Date('d/m/Y') ?> </php>
        <hr>
        <p class="Centro" ><?php echo $nmprofessor ?> - Professor(a)</p>
        <hr>
        <p class="Centro"><?php echo $nmcoordenador ?> - Coordendador(a)</p>

    </body>
</html>