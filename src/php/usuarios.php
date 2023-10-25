<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - Consulta Usuários</title>
    <link rel="stylesheet" href="../styles/usuarios.css" />
    <?php include "../components/Menu/headers.php" ?>
    <?php include "../components/Navbar/headers.php" ?>
  </head>
  <body>
    <p id="paginaAtual" style="display: none;">usuarios.php</p>
    <?php include "../components/Menu/menu.php"; ?>
    <main>
      <?php  include "../components/Navbar/navbar.php"; ?>
      <section class="lista_de_usuarios_section">
        <article class="lista_de_usuarios_article">
            <?php
              require('./conexao.php');
              $sql = "select id_usuario, nm_usuario, nm_login, sg_nivel from tb_usuario";
              $query = $pdo->prepare($sql);
              $query->execute();

              $resultados = $query->fetchAll(PDO::FETCH_ASSOC);
              foreach($resultados as $campos){
                echo "<div class='card_usuario'>";
                echo "<p>Código: <strong>".$campos['id_usuario']."</strong></p>";
                echo "<p>Nome: <strong>".$campos['nm_usuario']."</strong></p>";
                echo "<p>Login: <strong>".$campos['nm_login']."</strong></p>";
                echo "<p>Nível: <strong>".$campos['sg_nivel']."</strong></p>";
                echo "</div>";
              }
            ?>
        </article>
      </section>
    </main>
  </body>
</html>
