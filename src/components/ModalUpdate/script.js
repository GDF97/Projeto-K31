const editButtons = document.querySelectorAll(".btnEditUsuario");
const allInputs = document.querySelectorAll("#inputUpdate");
const ModalUpdate = document.querySelector(".ModalUpdate");
const btnCancelUpdate = document.getElementById("btnCancelUpdate");

const fnModalUpdate = () => {
  if (ModalUpdate.classList.contains("active")) {
    ModalUpdate.classList.remove("active");
  } else {
    ModalUpdate.classList.add("active");
  }
};

btnCancelUpdate.addEventListener("click", fnModalUpdate);

editButtons.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    const parentDiv = e.target.closest(".card_usuario");
    parentDiv.classList.add("editando");
    console.log(parentDiv);
    const strValues = document.querySelectorAll(".editando > p > strong");
    allInputs[0].value = strValues[0].innerHTML; // Codigo do usuario
    allInputs[1].value = strValues[0].innerHTML; // Codigo do usuario
    allInputs[2].value = strValues[3].innerHTML; // Nivel do usuario
    allInputs[3].value = strValues[1].innerHTML; // Nome do usuario
    allInputs[4].value = strValues[2].innerHTML; // Login do usuario
    fnModalUpdate();
    parentDiv.classList.remove("editando");
  });
});
