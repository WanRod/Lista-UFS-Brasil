<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UFS DO BRASIL</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $colunas = [
        'Bandeira',
        'Unidade Federativa',
        'Abreviação',
        'Sede do Governo',
        'Área (km)',
        'População (2014)',
        'Densidade',
        'IDH (2010)',
        'Alfabetização',
        'Mortalidade Infantil (2016)',
        'Expectativa de Vida (2016)',
    ];

    $linhas = array(
        'AC' => array(
            '1' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Bandeira_do_Acre.svg/500px-Bandeira_do_Acre.svg.png" alt="Bandeira do Acre">',
            '2' => "Acre",
            '3' => "AC",
            '4' => "Rio Branco",
            '5' => "164 122,2",
            '6' => "795 145",
            '7' => "4,30",
            '8' => "13 622 000",
            '9' => "0.2",
            '10' => "16 953,46",
            '11' => "0,663",
            '12' => "86,9%",
            '13' => "17,0%",
            '14' => "73,9 anos"
        )
    );
?>

    <table>
        <thead>
            <tr>
                <th>Bandeira</th>
                <th>Unidade federativa</th>
                <th>Abreviação</th>
                <th>Sede de governo</th>
                <th>Área (km<sup>2</sup>)</th>
                <th>População (2014)</th>
                <th>Densidade (2005)</th>
                <th>PIB (2015)</th>
                <th>(% total) (2015)</th>
                <th>PIB per capita (R$) (2015)</th>
                <th>IDH</th>
                <th>Alfabetização (2016)</th>
                <th>Mortalidade infantil (2016)</th>
                <th>Expectativa de vida (2016)</th>
            </tr>
        </thead>    

        <tbody>
            <?php  
            foreach($linhas as $colunas => $valor){
                echo "<tr><td>{$linhas[$colunas]['1']}</td>";
                echo "<td>{$linhas[$colunas]['2']}</td>";
                echo "<td>{$linhas[$colunas]['3']}</td>";
                echo "<td>{$linhas[$colunas]['4']}</td>";
                echo "<td>{$linhas[$colunas]['5']}</td>";
                echo "<td>{$linhas[$colunas]['6']}</td>";
                echo "<td>{$linhas[$colunas]['7']}</td>";
                echo "<td>{$linhas[$colunas]['8']}</td>";
                echo "<td>{$linhas[$colunas]['9']}</td>";
                echo "<td>{$linhas[$colunas]['10']}</td>";
                echo "<td>{$linhas[$colunas]['11']}</td>";
                echo "<td>{$linhas[$colunas]['12']}</td>";
                echo "<td>{$linhas[$colunas]['13']}</td>";
                echo "<td>{$linhas[$colunas]['14']}</td>";
            }
            ?>
        </tbody>
    </table>

</body>

</html>