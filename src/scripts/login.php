<?php

    session_start();

    require("../php/conexao.php");
    if(isset($_POST['username']) && !empty($_POST['username']) || isset($_POST['password']) && !empty($_POST['password'])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $sql = "select nm_usuario from tb_usuario where nm_login = '$username' and cd_senha = '$password'";
        $query = $pdo->prepare($sql);
        $query->execute();
        $user = $query->fetch();
        
        if($user){
            $_SESSION['user'] = $user['nm_usuario'];
            header('location:../php/dashboard.php');
            //echo "<script> window.location.href = '../php/dashboard.php' </script>";
        }
        else{
            echo "<script> window.location.href = '../../index.html' </script>";
        }
        
        
    } else{
        echo "<script> window.location.href = '../../index.html' </script>";
        exit();
    }
?>
