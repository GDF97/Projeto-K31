<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - Cadastro Usuário</title>

    <link rel="stylesheet" href="../styles/cadastro.css" />
    <?php include "../components/Menu/headers.php" ?>
    <?php include "../components/Navbar/headers.php" ?>
    <?php include "../components/Modal/headers.php"; ?>
  </head>
  <body>
    <?php include "../components/Menu/menu.php"; ?>
    <main>
      <?php  include "../components/Navbar/navbar.php"; ?>
      <section class="cadastro-section">
        <form action="../scripts/cadastro.php" method="post">
          <div class="input_group">
            <label for="">Nome</label>
            <input type="text" name="nome" id="nome" autocomplete="off" maxlength="50" />
          </div>
          <div class="input_group">
            <label for="">Login</label>
            <input type="text" name="login" id="login" autocomplete="off" maxlength="20" />
          </div>
          <div class="input_group">
            <label for="">Senha</label>
            <input type="text" name="senha" id="senha" autocomplete="off" maxlength="15" />
          </div>
          <div class="input_group">
            <label for="">Nível</label>
            <input type="number" name="nivel" id="nivel" autocomplete="off" min="1" max="3" />
          </div>
          <button type="submit">Cadastrar</button>
        </form>
      </section>
    </main>
    <?php include "../components/Modal/modal.php"; ?>
  </body>
</html>
