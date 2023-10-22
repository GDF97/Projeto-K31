const modal = document.querySelector(".modal");
const btnModal = document.querySelector(".btnModal");
const getParams = new URLSearchParams(window.location.search);
const param = getParams.get("error");

const fnModal = () => {
  if (modal.classList.contains("active")) {
    modal.classList.remove("active");
  } else {
    modal.classList.add("active");
  }
};

if (param) {
  fnModal();
} else {
  console.log("tudo certo!");
}

btnModal.addEventListener("click", fnModal);
