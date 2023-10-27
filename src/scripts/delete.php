<?php

    require("../../src/php/conexao.php");

    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['idUsuarioDelete'])){
        $id_do_usuario = $_POST['idUsuarioDelete'];

        try{
            $sql = "delete from tb_usuario where id_usuario = $id_do_usuario";
            $query = $pdo->prepare($sql);
            $query->execute();
            header("location:../php/usuarios.php");
        }
        catch (PDOException $e){
            echo $e->getMessage();
        }
    }

?>