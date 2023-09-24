<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>GET - PHP</title>
		<link rel="stylesheet" href="../styles/navbar.css">
		<link rel="stylesheet" href="./PostAndGet.css">
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
			<h1> Usando o Metodo Get </h1>
			<div>
				<?php
					$valoresDeEntradaURL = $_GET['entrada'];
					$valoresDeEntradaSeparada = explode(";", $entradasURL);
					$labelDasEntradas = ["Numero de Agentes: ", "Aparelhos: ", "Cidade: " ,"Postos: " ,"Bairro: " ,"Ano: ", "Mes: " ]; 

					$i = 0;
					foreach ($valoresDeEmtrada as $value) {
						echo "<p>".$labelDasEntradas[$i].": "."<strong>".$value."</strong>"."</p>";
						echo "<br>";
						$i++;
					}
				?>
			</div>
		</section>
</body>
</html>
