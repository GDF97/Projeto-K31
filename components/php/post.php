<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>POST - PHP</title>
		<link rel="stylesheet" href="../styles/navbar.css">
</head>
<body>
		<header class="header">
			<nav class="header_nav">
        <a href="../../index.html" class="nav_item">Inicio</a>
        <a href="../pages/login.html" class="nav_item">Login</a>
        <a href="../pages/cadastro.html" class="nav_item"> Cadastro </a>
        <a href="../pages/menu.html" class="nav_item">Menu</a>
        <a href="./tabela.php" class="nav_item">Tabela</a>
        <a href="./data.php" class="nav_item">Data</a>
        <a href="./get.php" class="nav_item">$_GET</a>
        <a href="./post.php" class="nav_item">$_POST</a>
			</nav>
		</header>

		<section class="content">
			<h1> Usando o Metodo Post </h1>
			<div>
				<?php
					$user_username = $_POST["username"];
					$user_email = $_POST["email"];
					$user_password = $_POST["password"];	

					echo "<p>Username: <strong>".$user_username."</strong> </p>";
					echo "<br>";
					echo "<p>Email: <strong>".$user_email."</strong> </p>";
					echo "<br>";
					echo "<p>Password: <strong>".$user_password."</strong> </p>";
				?>
			</div>
		</section>
</body>
</html>
