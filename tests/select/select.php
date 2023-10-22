<?php
    require('../../src/php/conexao.php');
    
    
    
    if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password']) ){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $sql = "select * from tb_usuario where nm_login = '$username' and cd_senha = '$password'";
        $query = $pdo->prepare($sql);
        // $query -> bindParam(":username", $username);
        // $query -> bindParam(":passowrd", $password);
    
        $query -> execute();
    
        $user = $query->fetch();

        
        if($user){
            echo "<script> window.location.href = './teste.html' </script>";
        }
        else{
            echo "<script> window.location.href = './select.html?parametro=' + 'erro' </script>";
        }

    }
    else{
        echo 'error';
    }

?>
