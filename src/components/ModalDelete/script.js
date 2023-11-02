const deleteButtons = document.querySelectorAll(".btnDeleteUsuario");
const ModalDelete = document.querySelector(".ModalDelete");
const inputDelete = document.getElementById("inputDelete");
const btnCancelDelete = document.getElementById("btnCancelDelete");

const fnModalDelete = () => {
  if (ModalDelete.classList.contains("active")) {
    ModalDelete.classList.remove("active");
  } else {
    ModalDelete.classList.add("active");
  }
};

btnCancelDelete.addEventListener("click", fnModalDelete);
deleteButtons.forEach((btn) => {
  btn.addEventListener("click", () => {
    inputDelete.value = btn.value;
    console.log(inputDelete.value);
    fnModalDelete();
  });
});
