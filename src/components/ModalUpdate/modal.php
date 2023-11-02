<div class="ModalUpdate">
  <div class="modal-update-card">
    <h1>Alterando Usuário</h1>
    <form action="../scripts/update.php" method="post">
      <div class="inputGroup">
        <div>
          <p>Código</p>
          <input type="text" id="inputUpdate" disabled />
          <input type="text" name="codigoUsuario" id="inputUpdate" style="display: none;" />
          <!-- O input invisivel vai ser o input que o php ira receber -->
        </div>
        <div>
          <p>Nível</p>
          <input type="number" name="nivel" id="inputUpdate" maxlength="3" minlength="1"/>
        </div>
      </div>
      <div class="inputGroup">
        <p>Nome</p>
        <input type="text" name="nome" id="inputUpdate" autocomplete="off" />
      </div>
      <div class="inputGroup">
        <p>Login</p>
        <input type="text" name="login" id="inputUpdate" autocomplete="off" />
      </div>
      <div class="buttonWrapper">
        <button type="submit">Alterar</button>
        <button type="reset" id="btnCancelUpdate">Cancelar</button>
      </div> 
    </form>
  </div>
</div>
