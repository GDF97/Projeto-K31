<?php

    require("../../src/php/conexao.php");
    $id = $_POST['id'];

    try{
        $sql = "delete from tb_teste where idTESTE = $id";
        $query = $pdo->prepare($sql);
        $query->execute();
        header("location:./delete.php");
    } 
    catch(PDOException $e){
        echo $e->getMessage();
    }
    
?>