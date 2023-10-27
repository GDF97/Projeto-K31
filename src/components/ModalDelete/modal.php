<div class="ModalDelete">
  <div class="modal-card">
    <form action="../scripts/delete.php" method="post">
      <h1>Deseja excluir esse usuário?</h1>
      <p>Ao excluir esse usuário, as informações do mesmo não poderão ser recuperdas</p>
      <input type="text" name="idUsuarioDelete" id="inputDelete" />
      <div class="button_wrapper">
        <button type="submit" class="btnModal btnModalDelete">
          Sim, Desejo Excluir!
        </button>
        <button type="reset" class="btnModal" id="btnCancelDelete">Não, Não Desejo Excluir!</button>
      </div>
    </form>
  </div>
</div>
