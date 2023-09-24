<?php

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

    $nome = "Francisco e Pedro Silva";
    $nomes = explode(" ",$nome);
    for($i = 0; $i < 4 ; $i++){
        echo $nomes[$i]."<br>";
    }

    $dataconsertada = parseSql(date("d/m/Y"));
    echo $dataconsertada;

    echo "<br>";
    // $letrasseparadas = str_split($nome, );

    $entradaTeste = $_GET['entrada'];
    $entradaNomes = ["Numero de Agentes: ", "Aparelhos: ", "Cidade: " ,"Postos: " ,"Bairro: " ,"Ano: ", "Mes: " ]; 
    $entradasSeparada = explode(";", $entradaTeste);

    // for($i = 0; $i < count($entradasSeparada); $i++){
    //     echo "<br>";
    //     echo  $entradaNomes[$i].$entradasSeparada[$i];
    //     echo "<br>";
    // }


    // array_push($entradaNomes, "teste1", "teste2", "teste3");
    // echo $entradaNomes[7];
    // echo $entradaNomes[8];
    // echo $entradaNomes[9];


    function parseSql($data){
        $partes = explode("/", $data);
        $datasql = $partes[2]."-".$partes[1]."-".$partes[0];
        return $datasql;
    }

    $a = 0;
    foreach ($entradasSeparada as $value) {
        echo "<br>";
        echo  $entradaNomes[$a].$value;
        echo "<br>";
        $a++;
    }

    $teste = strftime('%A', strtotime('today'));;
    echo $teste;
?>
