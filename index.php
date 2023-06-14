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
        ),
        'AL' => array(
            '1' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/Bandeira_de_Alagoas.svg/500px-Bandeira_de_Alagoas.svg.png" alt="Bandeira de Alagoas">',
            '2' => "Alagoas",
            '3' => "AL",
            '4' => "Maceió",
            '5' => "27 767,7",
            '6' => "3 327 551",
            '7' => "2,64",
            '8' => "52 327 000",
            '9' => "0.3",
            '10' => "15 185,10",
            '11' => "0,660",
            '12' => "83,7%",
            '13' => "19,5%",
            '14' => "71,6 anos"
        ),
        'AP' => array(
            '1' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Bandeira_do_Amap%C3%A1.svg/500px-Bandeira_do_Amap%C3%A1.svg.png" alt="Bandeira do Amapá">',
            '2' => "Amapá",
            '3' => "AP",
            '4' => "Macapá",
            '5' => "142 828,5",
            '6' => "861 773",
            '7' => "6,04",
            '8' => "19 653 000",
            '9' => "0.3",
            '10' => "13 780,57",
            '11' => "0,665",
            '12' => "89,9%",
            '13' => "23,2%",
            '14' => "73,9 anos"
        ),
        'AM' => array(
            '1' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/Bandeira_do_Amazonas.svg/500px-Bandeira_do_Amazonas.svg.png" alt="Bandeira do Amazonas">',
            '2' => "Amazonas",
            '3' => "AM",
            '4' => "Manaus",
            '5' => "1 570 745,7",
            '6' => "4 280 211",
            '7' => "2,73",
            '8' => "89 712 000",
            '9' => "3.9",
            '10' => "20 027,26",
            '11' => "0,667",
            '12' => "92,9%",
            '13' => "18,2%",
            '14' => "71,9 anos"
        ),
        'BA' => array(
            '1' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/28/Bandeira_da_Bahia.svg/500px-Bandeira_da_Bahia.svg.png" alt="Bandeira da Bahia">',
            '2' => "Bahia",
            '3' => "BA",
            '4' => "Salvador",
            '5' => "564 733,2",
            '6' => "15 152 608",
            '7' => "2,71",
            '8' => "259 746 000",
            '9' => "10.4",
            '10' => "17 431,04",
            '11' => "0,660",
            '12' => "82,6%",
            '13' => "17,3%",
            '14' => "73,5 anos"
        ),
        'CE' => array(
            '1' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/Bandeira_do_Cear%C3%A1.svg/500px-Bandeira_do_Cear%C3%A1.svg.png" alt="Bandeira do Ceará">',
            '2' => "Ceará",
            '3' => "CE",
            '4' => "Fortaleza",
            '5' => "148 920,4",
            '6' => "9 187 103",
            '7' => "3,12",
            '8' => "100 978 000",
            '9' => "4.2",
            '10' => "10 579,15",
            '11' => "0,661",
            '12' => "84,2%",
            '13' => "14,4%",
            '14' => "73,8 anos"
        ),
        'DF' => array(
            '1' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Bandeira_do_Distrito_Federal_%28Brasil%29.svg/500px-Bandeira_do_Distrito_Federal_%28Brasil%29.svg.png" alt="Bandeira do Distrito Federal">',
            '2' => "Distrito Federal",
            '3' => "DF",
            '4' => "Brasília",
            '5' => "5 774,7",
            '6' => "3 055 149",
            '7' => "2,50",
            '8' => "266 853 000",
            '9' => "4.0",
            '10' => "69 159,45",
            '11' => "0,824",
            '12' => "96,7%",
            '13' => "10,5%",
            '14' => "78,1 anos"
        ),
        'ES' => array(
            '1' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/43/Bandeira_do_Esp%C3%ADrito_Santo.svg/500px-Bandeira_do_Esp%C3%ADrito_Santo.svg.png" alt="Bandeira do Espírito Santo">',
            '2' => "Espírito Santo",
            '3' => "ES",
            '4' => "Vitória",
            '5' => "46 077,5",
            '6' => "4 064 052",
            '7' => "2,37",
            '8' => "118 088 000",
            '9' => "4.5",
            '10' => "25 731,54",
            '11' => "0,699",
            '12' => "89,3%",
            '13' => "8,8%",
            '14' => "78,2 anos"
        ),
        'GO' => array(
            '1' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/be/Flag_of_Goi%C3%A1s.svg/560px-Flag_of_Goi%C3%A1s.svg.png" alt="Bandeira de Goiás">',
            '2' => "Goiás",
            '3' => "GO",
            '4' => "Goiânia",
            '5' => "340 111,7",
            '6' => "7 113 540",
            '7' => "2,62",
            '8' => "188 165 000",
            '9' => "7.6",
            '10' => "13 832,65",
            '11' => "0,692",
            '12' => "91,2%",
            '13' => "14,9%",
            '14' => "74,2 anos"
        ),
        'MA' => array(
            '1' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/Bandeira_do_Maranh%C3%A3o.svg/500px-Bandeira_do_Maranh%C3%A3o.svg.png" alt="Bandeira do Maranhão">',
            '2' => "Maranhão",
            '3' => "MA",
            '4' => "São Luís",
            '5' => "331 983,3",
            '6' => "7 155 774",
            '7' => "2,69",
            '8' => "136 694 000",
            '9' => "6.3",
            '10' => "19 887,36",
            '11' => "0,639",
            '12' => "81,8%",
            '13' => "21,3%",
            '14' => "70,6 anos"
        ),
        'MT' => array(
            '1' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Bandeira_de_Mato_Grosso.svg/800px-Bandeira_de_Mato_Grosso.svg.png" alt="Bandeira do Mato Grosso">',
            '2' => "Mato Grosso",
            '3' => "MT",
            '4' => "Cuiabá",
            '5' => "903 366,2",
            '6' => "3 484 466",
            '7' => "1,98",
            '8' => "133 682 000",
            '9' => "5.4",
            '10' => "12 025,69",
            '11' => "0,727",
            '12' => "95,2%",
            '13' => "16,9%",
            '14' => "74,2 anos"
        ),
        'MS' => array(
            '1' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Bandeira_de_Mato_Grosso_do_Sul.svg/800px-Bandeira_de_Mato_Grosso_do_Sul.svg.png" alt="Bandeira do Mato Grosso do Sul">',
            '2' => "Mato Grosso do Sul",
            '3' => "MS",
            '4' => "Campo Grande",
            '5' => "357 145,5",
            '6' => "2 809 394",
            '7' => "1,74",
            '8' => "67 157 000",
            '9' => "2.8",
            '10' => "23 041,39",
            '11' => "0,724",
            '12' => "94,8%",
            '13' => "14,0%",
            '14' => "75,5 anos"
        ),
        'MG' => array(
            '1' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f4/Bandeira_de_Minas_Gerais.svg/500px-Bandeira_de_Minas_Gerais.svg.png" alt="Bandeira de Minas Gerais">',
            '2' => "Minas Gerais",
            '3' => "MG",
            '4' => "Belo Horizonte",
            '5' => "586 522,1",
            '6' => "21 292 666",
            '7' => "2,94",
            '8' => "508 332 000",
            '9' => "20.5",
            '10' => "23 374,92",
            '11' => "0,731",
            '12' => "89,2%",
            '13' => "10,9%",
            '14' => "77,2 anos"
        ),
        'PA' => array(
            '1' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/02/Bandeira_do_Par%C3%A1.svg/500px-Bandeira_do_Par%C3%A1.svg.png" alt="Bandeira do Pará">',
            '2' => "Pará",
            '3' => "PA",
            '4' => "Belém",
            '5' => "1 247 689,5",
            '6' => "8 690 745",
            '7' => "1,71",
            '8' => "149 179 000",
            '9' => "6.0",
            '10' => "16 403,08",
            '11' => "0,638",
            '12' => "83,3%",
            '13' => "16,6%",
            '14' => "72,1 anos"
        ),
        'PB' => array(
            '1' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bb/Bandeira_da_Para%C3%ADba.svg/500px-Bandeira_da_Para%C3%ADba.svg.png" alt="Bandeira da Paraíba">',
            '2' => "Paraíba",
            '3' => "PB",
            '4' => "João Pessoa",
            '5' => "56 439,8",
            '6' => "4 039 277",
            '7' => "2,19",
            '8' => "58 125 000",
            '9' => "2.3",
            '10' => "14 336,93",
            '11' => "0,651",
            '12' => "81,5%",
            '13' => "16,1%",
            '14' => "73,2 anos"
        ),
        'PR' => array(
            '1' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/93/Bandeira_do_Paran%C3%A1.svg/500px-Bandeira_do_Paran%C3%A1.svg.png" alt="Bandeira do Paraná">',
            '2' => "Paraná",
            '3' => "PR",
            '4' => "Curitiba",
            '5' => "199 314,9",
            '6' => "11 516 840",
            '7' => "3,29",
            '8' => "444 119 000",
            '9' => "17.9",
            '10' => "38 891,54",
            '11' => "0,740",
            '12' => "92,0%",
            '13' => "9,3%",
            '14' => "77,1 anos"
        ),
        'PE' => array(
            '1' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/Bandeira_de_Pernambuco.svg/540px-Bandeira_de_Pernambuco.svg.png" alt="Bandeira de Pernambuco">',
            '2' => "Pernambuco",
            '3' => "PE",
            '4' => "Recife",
            '5' => "98 311,6",
            '6' => "9 813 473",
            '7' => "4,17",
            '8' => "216 448 000",
            '9' => "8.7",
            '10' => "21 405,13",
            '11' => "0,695",
            '12' => "86,6%",
            '13' => "12,7%",
            '14' => "73,9 anos"
        ),
        'PI' => array(
            '1' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/33/Bandeira_do_Piau%C3%AD.svg/500px-Bandeira_do_Piau%C3%AD.svg.png" alt="Bandeira do Piauí">',
            '2' => "Piauí",
            '3' => "PI",
            '4' => "Teresina",
            '5' => "251 529,2",
            '6' => "3 281 480",
            '7' => "1,83",
            '8' => "51 682 000",
            '9' => "2.1",
            '10' => "15 359,28",
            '11' => "0,639",
            '12' => "81,8%",
            '13' => "19,1%",
            '14' => "71,1 anos"
        ),
        'RJ' => array(
            '1' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Bandeira_do_estado_do_Rio_de_Janeiro.svg/800px-Bandeira_do_estado_do_Rio_de_Janeiro.svg.png" alt="Bandeira do Rio de Janeiro">',
            '2' => "Rio de Janeiro",
            '3' => "RJ",
            '4' => "Rio de Janeiro",
            '5' => "43 696,1",
            '6' => "17 366 189",
            '7' => "3,99",
            '8' => "690 064 000",
            '9' => "28.0",
            '10' => "39 553,55",
            '11' => "0,762",
            '12' => "87,8%",
            '13' => "11,5%",
            '14' => "76,2 anos"
        ),
        'RN' => array(
            '1' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/30/Bandeira_do_Rio_Grande_do_Norte.svg/500px-Bandeira_do_Rio_Grande_do_Norte.svg.png" alt="Bandeira do Rio Grande do Norte">',
            '2' => "Rio Grande do Norte",
            '3' => "RN",
            '4' => "Natal",
            '5' => "52 796,8",
            '6' => "3 534 165",
            '7' => "2,33",
            '8' => "55 774 000",
            '9' => "2.2",
            '10' => "15 781,34",
            '11' => "0,678",
            '12' => "82,3%",
            '13' => "14,7%",
            '14' => "75,7 anos"
        ),
        'RS' => array(
            '1' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/63/Bandeira_do_Rio_Grande_do_Sul.svg/500px-Bandeira_do_Rio_Grande_do_Sul.svg.png" alt="Bandeira do Rio Grande do Sul">',
            '2' => "Rio Grande do Sul",
            '3' => "RS",
            '4' => "Porto Alegre",
            '5' => "281 748,5",
            '6' => "11 466 411",
            '7' => "3,94",
            '8' => "577 645 000",
            '9' => "21.7",
            '10' => "50 616,39",
            '11' => "0,750",
            '12' => "92,1%",
            '13' => "9,6%",
            '14' => "77,8 anos"
        ),
        'RO' => array(
            '1' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Bandeira_de_Rond%C3%B4nia.svg/500px-Bandeira_de_Rond%C3%B4nia.svg.png" alt="Bandeira de Rondônia">',
            '2' => "Rondônia",
            '3' => "RO",
            '4' => "Porto Velho",
            '5' => "237 590,7",
            '6' => "1 796 460",
            '7' => "2,81",
            '8' => "63 733 000",
            '9' => "2.6",
            '10' => "35 628,78",
            '11' => "0,692",
            '12' => "81,7%",
            '13' => "20,0%",
            '14' => "71,3 anos"
        ),
        'RR' => array(
            '1' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/Bandeira_de_Roraima.svg/800px-Bandeira_de_Roraima.svg.png" alt="Bandeira de Roraima">',
            '2' => "Roraima",
            '3' => "RR",
            '4' => "Boa Vista",
            '5' => "224 299,0",
            '6' => "652 713",
            '7' => "2,65",
            '8' => "27 513 000",
            '9' => "1.1",
            '10' => "42 396,19",
            '11' => "0,664",
            '12' => "81,3%",
            '13' => "17,2%",
            '14' => "71,5 anos"
        ),
        'SC' => array(
            '1' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Bandeira_de_Santa_Catarina.svg/500px-Bandeira_de_Santa_Catarina.svg.png" alt="Bandeira de Santa Catarina">',
            '2' => "Santa Catarina",
            '3' => "SC",
            '4' => "Florianópolis",
            '5' => "95 732,4",
            '6' => "7 409 423",
            '7' => "4,78",
            '8' => "289 437 000",
            '9' => "11.6",
            '10' => "38 682,39",
            '11' => "0,776",
            '12' => "92,6%",
            '13' => "9,2%",
            '14' => "79,1 anos"
        ),
        'SP' => array(
            '1' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2b/Bandeira_do_estado_de_S%C3%A3o_Paulo.svg/500px-Bandeira_do_estado_de_S%C3%A3o_Paulo.svg.png" alt="Bandeira de São Paulo">',
            '2' => "São Paulo",
            '3' => "SP",
            '4' => "São Paulo",
            '5' => "248 209,4",
            '6' => "46 289 333",
            '7' => "3,71",
            '8' => "1 537 375 000",
            '9' => "59.6",
            '10' => "32 287,83",
            '11' => "0,783",
            '12' => "89,7%",
            '13' => "9,9%",
            '14' => "78,1 anos"
        ),
        'SE' => array(
            '1' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/be/Bandeira_de_Sergipe.svg/800px-Bandeira_de_Sergipe.svg.png" alt="Bandeira de Sergipe">',
            '2' => "Sergipe",
            '3' => "SE",
            '4' => "Aracaju",
            '5' => "21 910,3",
            '6' => "2 318 822",
            '7' => "3,48",
            '8' => "60 388 000",
            '9' => "2.4",
            '10' => "27 198,10",
            '11' => "0,665",
            '12' => "84,2%",
            '13' => "16,2%",
            '14' => "72,7 anos"
        ),
        'TO' => array(
            '1' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Bandeira_do_Tocantins.svg/512px-Bandeira_do_Tocantins.svg.png" alt="Bandeira do Tocantins">',
            '2' => "Tocantins",
            '3' => "TO",
            '4' => "Palmas",
            '5' => "277 620,9",
            '6' => "1 572 866",
            '7' => "3,63",
            '8' => "37 582 000",
            '9' => "1.5",
            '10' => "23 829,85",
            '11' => "0,699",
            '12' => "85,1%",
            '13' => "15,8%",
            '14' => "73,4 anos"
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