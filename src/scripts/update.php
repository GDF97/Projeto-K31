<?php

    require("../../src/php/conexao.php");

    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['codigoUsuario'])){
        $id_usuario = $_POST['codigoUsuario'];
        $sg_nivel = $_POST['nivel'];
        $nm_usuario = $_POST['nome'];
        $nm_login = $_POST['login'];

        try{
            $sql = "update tb_usuario set nm_usuario = :nm_usuario, nm_login = :nm_login, sg_nivel = :sg_nivel where id_usuario = :id_usuario";
            $query = $pdo->prepare($sql);
            $query -> bindParam(":nm_usuario", $nm_usuario);
            $query -> bindParam(":nm_login", $nm_login);
            $query -> bindParam(":sg_nivel", $sg_nivel);
            $query -> bindParam(":id_usuario", $id_usuario);
            $query->execute();
            header("location:../php/usuarios.php");
        }
        catch (PDOException $e){
            echo $e->getMessage();
        }
    }

?>