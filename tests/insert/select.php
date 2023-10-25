<?php
    require('../../src/php/conexao.php');

    try{
        $sql = "select idTESTE, nm_teste, cd_senha from tb_teste";
        $query = $pdo->prepare($sql);
        $query -> execute();
        
        $resultados = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach($resultados as $campos){
            echo "<p>".$campos['idTESTE']." ".$campos['nm_teste']." ".$campos['cd_senha']."</p>";
        }
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }


?>