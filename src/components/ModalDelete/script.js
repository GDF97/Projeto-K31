const deleteButtons = document.querySelectorAll(".btnDeleteUsuario");
const Modal = document.querySelector(".ModalDelete");
const inputDelete = document.getElementById("inputDelete");
const btnCancelDelete = document.getElementById("btnCancelDelete");

const fnModal = () => {
  if (Modal.classList.contains("active")) {
    Modal.classList.remove("active");
  } else {
    Modal.classList.add("active");
  }
};

btnCancelDelete.addEventListener("click", fnModal);
deleteButtons.forEach((btn) => {
  btn.addEventListener("click", () => {
    inputDelete.value = btn.value;
    console.log(inputDelete.value);
    fnModal();
  });
});
