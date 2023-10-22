const horaEdiaDisplay = document.getElementById("horaEdia");
const diaDaSemanaDisplay = document.getElementById("diaDaSemana");

const semana = [
  "Domingo",
  "Segunda-Feira",
  "Terça-Feira",
  "Quarta-Feira",
  "Quinta-Feira",
  "Sexta-Feira",
  "Sábado",
];

const clock = () => {
  let data = new Date();
  let dia = data.getDate();
  let mes = data.getMonth() + 1;
  let ano = data.getFullYear();

  let horas = data.getHours();
  let minutos = data.getMinutes();

  if (horas < 10) {
    horas = "0" + horas;
  }

  if (minutos < 10) {
    minutos = "0" + minutos;
  }

  let dataFormatada =
    (dia < 10 ? "0" + dia : dia) +
    "/" +
    (mes < 10 ? "0" + mes : mes) +
    "/" +
    ano;
  let horaFormatada = horas + ":" + minutos;
  diaDaSemanaDisplay.textContent = semana[data.getDay()];
  horaEdiaDisplay.textContent = dataFormatada + " - " + horaFormatada;
};

let interval = setInterval(clock, 1000);
