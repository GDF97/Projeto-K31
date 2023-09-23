<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Tabela - PHP</title>
		<link rel="stylesheet" href="./tabela.css">
		<link rel="stylesheet" href="../../css/navbar.css">
</head>
<body>
    <header class="header">
      <nav class="header_nav">
        <a href="../pages/login.html" class="nav_item">Login</a>
        <a href="../pages/cadastro.html" class="nav_item"> Cadastro </a>
        <a href="../pages/menu.html" class="nav_item">Menu</a>
        <a href="./tabela.php" class="nav_item">Tabela</a>
        <a href="./data.php" class="nav_item">Data</a>
        <a href="./get.php" class="nav_item">$_GET</a>
        <a href="./post.php" class="nav_item">$_POST</a>
			</nav>
		</header>

    <div class="table-wrapper">
      <table class="table">
        <tr class="row">
          <th class="column table-header">ID</th>
          <th class="column table-header middle-cell">EMAIL</th>
          <th class="column table-header">NOME</th>
          <th class="column table-header">DATA</th>
        </tr>
        <?php
        $hoje = date("d/m/Y");
            for($i = 1; $i <= 5; $i++){
                echo
                "<tr class=row>
                    <td class=column > <div> $i </div> </td>
                    <td class=column id=middle-cell> <div> &nbsp </div>  </td>
                    <td class=column id=middle-cell> <div> &nbsp </div> </td>
                    <td class=column> <div> $hoje </div> </td>
                </tr>";
            }
        ?>
      </table>
    </div>
</body>
</html>
