<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Data - PHP</title>
		<link rel="stylesheet" href="./data.css">
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

		<section class="content_container">
			<article class="content_metodo_date">
				<h1> Usando o metodo Date </h1>
				<div>
					<?php 
						date_default_timezone_set('America/Sao_Paulo');
						$dataHoje = date("d/m/Y");
						$dataHojeSQL = date("Y-m-d");
						$dataHojeSQL_Hora = date("Y-m-d H:i");
						$diaDaSemana = date("l");
						echo "<p>Data atual: ". $dataHoje."</p>";
						echo "<br>";
						echo "<p>Data atual(Modelo SQL): ". $dataHojeSQL. "</p>";
						echo "<br>";
						echo "<p>Data atual(Modelo SQL-Hora): ". $dataHojeSQL_Hora. "</p>";
						echo "<br>";
						echo "<p>Dia da Semana: ". $diaDaSemana. "</p>";
						echo "<br>";
						echo "<span>Dia da Semana traduzida: <p class=diadasemana></p> </span>"
					?>
				</div>
			</article>
			<article class="content_metodo_date">
				<h1> Usando o metodo GetDate </h1>
				<div>
					<?php 
						$dataGetDate = getdate();
						echo "<p> Horário: ".$dataGetDate["hours"].":".$dataGetDate["minutes"]."</p>";
						echo "<br>";
						echo "<p> Data atual: ".$dataGetDate["mday"]."/".$dataGetDate["mon"]."/".$dataGetDate["year"]."</p>";
					?>
				</div>
			</article>
		</section>
		<script>
			const displayDia = document.querySelector(".diadasemana")
      const diaSemana = "<?php echo $diaDaSemana ?>"
      const dias =  {
              Monday: "Segunda-Feira",
              Tuesday: "Terça-Feira",
              Wednesday: "Quarta-Feira",
              Thursday: "Quinta-Feira",
              Friday: "Sexta-Feira",
              Saturday: "Sábado",
              Sunday: "Domingo"
        }
			displayDia.textContent = dias[diaSemana];
		</script> 
</body>
</html>
