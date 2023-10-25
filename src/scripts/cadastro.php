<?php
    require("../php/conexao.php");
    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $user_nome = $_POST['nome'];
        $user_login = $_POST['login'];
        $user_senha = $_POST['senha'];
        $user_nivel = $_POST['nivel'];

        if(!empty($user_nome) && !empty($user_login) && !empty($user_senha) && !empty($user_nivel)){
            try{
                $sql = "insert into tb_usuario(nm_usuario, nm_login, cd_senha, sg_nivel)
                 values(:nm_usuario, :nm_login, :cd_senha, :sg_nivel)";
                
                $query = $pdo->prepare($sql);
                $query -> bindParam(":nm_usuario", $user_nome);
                $query -> bindParam(":nm_login", $user_login);
                $query -> bindParam(":cd_senha", $user_senha);
                $query -> bindParam(":sg_nivel", $user_nivel);
                $query->execute();
    
                echo "<script> window.location.href = '../php/usuarios.php'</script>";
            }
            catch(PDOException $e){
                echo "<script> window.location.href = '../php/cadastro.php' </script>";
            }
        }
        else{
            echo "<script> window.location.href = '../php/cadastro.php?error=' + '1'</script>";
            exit();
        }

    }
?>