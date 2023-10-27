<?php
  session_start();
  $nomeDeUsuario = $_SESSION['user'];
?>

<header class="header">
  <div class="left_header_item">
    <p id="horaEdia"></p>
    <p id="diaDaSemana"></p>
  </div>
  <div class="right_header_item">
    <p id="usuario"><?php echo $nomeDeUsuario; ?></p>
    <div class="frame"></div>
  </div>
</header>
