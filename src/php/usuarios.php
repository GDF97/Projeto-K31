<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - Consulta Usuários</title>
    <link rel="stylesheet" href="../styles/usuarios.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <?php include "../components/Menu/headers.php" ?>
    <?php include "../components/Navbar/headers.php" ?>
    <?php include "../components/ModalDelete/headers.php" ?>
    <?php include "../components/ModalUpdate/headers.php" ?>
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
                echo 
                    "<div class=card_buttons>
                      <button><i class='bx bx-edit-alt'></i></button>
                      <button><i class='bx bx-trash'></i></button>
                    </div>";
                echo 
                    "<div class='card_buttons cover'>
                      <button class='btn btnEditUsuario'></button>
                      <button class='btn btnDeleteUsuario' value=".$campos['id_usuario']."></button>
                    </div>";
                echo "</div>";
              }
              ?>
        </article>
        <?php include "../components/ModalUpdate/modal.php"; ?>
      </section>
    </main>
    <?php include "../components/ModalDelete/modal.php"; ?>
  </body>
</html>
