<?php
    
    require("../../src/php/conexao.php");
    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    
    try{
        $sql = "update tb_teste set nm_teste = '$nome', cd_senha = '$senha' where idTESTE = $codigo";
        $query = $pdo->prepare($sql);
        // $query -> bindParam(":codigo", $codigo);
        // $query -> bindParam(":nome", $nome);
        // $query -> bindParam(":login", $login);
        // $query -> bindParam(":cd_senha", $senha);
        $query->execute();
        header("location:./update.php");
    } 
    catch(PDOException $e){
        echo $e->getMessage();
    }
?>