const getParamsPage = new URLSearchParams(window.location.search);
const paramPage = getParamsPage.get("page");
const buttons = document.querySelectorAll(".btnMenu");

if (!paramPage) {
} else {
  console.log(paramPage);
  buttons.forEach((btn) => {
    if (btn.value == paramPage) {
      let parentLi = btn.closest("li");
      parentLi.classList.add("active");
    }
  });
}

buttons.forEach((btn) => {
  btn.addEventListener("click", () => {
    let page = btn.value;
    let urlFormatada = `${page}?page=` + page;
    console.log(urlFormatada);
    window.location.href = urlFormatada;
  });
});

// const btnActive = document.querySelector(".btnMenu.active");
// const parentLi = btn.closest("li");
// const liActive = document.querySelector("li.active");
// if (btn != btnActive) {
//   btnActive.classList.remove("active");
//   btn.classList.add("active");
// }

// if (parentLi != liActive) {
//   liActive.classList.remove("active");
//   parentLi.classList.add("active");
// }
