const getNameOfPage = document.getElementById("paginaAtual").innerText;
const buttons = document.querySelectorAll(".btnMenu");

console.log(getNameOfPage);

buttons.forEach((btn) => {
  if (btn.value == getNameOfPage) {
    let parentLi = btn.closest("li");
    parentLi.classList.add("active");
  }
});

buttons.forEach((btn) => {
  btn.addEventListener("click", () => {
    let page = btn.value;
    let urlFormatada = `${page}?page=` + page;
    console.log(urlFormatada);
    window.location.href = urlFormatada;
  });
});
