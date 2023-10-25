<?php
    require('../../src/php/conexao.php');

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nome = $_POST["nome"];
        $senha = $_POST["senha"];

        try{
            $sql = "insert into tb_teste(nm_teste, cd_senha) values(:nm_teste, :cd_senha)";
            $query = $pdo->prepare($sql);
            $query -> bindParam(":nm_teste", $nome);
            $query -> bindParam(":cd_senha", $senha);
            $query -> execute();

            echo "<script> window.location.href = './select.php' </script>";
        }
        catch(PDOException $e){
            echo $e->getMessage();
            echo "<script> alert('deu ruim!') </script>";
        }
    }
?>