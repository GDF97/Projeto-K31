<?php
  session_start();
  $nomeUsuario = $_SESSION['usuario'];
?>

<header class="header">
  <div class="left_header_item">
    <p id="horaEdia"></p>
    <p id="diaDaSemana"></p>
  </div>
  <div class="right_header_item">
    <p id="usuario"><?php echo $nomeUsuario; ?></p>
    <div class="frame"></div>
  </div>
</header>
