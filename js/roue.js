const barCanvas = document.getElementById("barCanvas");

let resultA = document.getElementById("apprentissage").innerHTML;
let resultIntra = document.getElementById("intrapersonnelles").innerHTML;
let resultR = document.getElementById("reflexion").innerHTML;
let resultC = document.getElementById("communication").innerHTML;
let resultInter = document.getElementById("interpersonnelles").innerHTML;
let resultL = document.getElementById("leadership").innerHTML;


const barChart = new Chart(barCanvas, {
  type: "radar",
  data: {
    labels: [
      "Apprentissage",
      "Compétences intrapersonnelles",
      "Reflexion",
      "Communication",
      "Compétences interpersonnelles",
      "Leadership",
    ],
    datasets: [{
      label: 'Moyenne de vos résultats sur 100%',
      data: [resultA, resultIntra, resultR, resultC, resultInter, resultL],
      fill: true,
      backgroundColor: 'rgba(237, 0, 140, 0.2)',
      borderColor: 'rgb(237, 0, 140)',
      pointBackgroundColor: 'rgb(237, 0, 140)',
      pointBorderColor: '#fff',
      pointHoverBackgroundColor: '#fff',
      pointHoverBorderColor: 'rgb(237, 0, 140)'
    }]

  },
  options: {
    scale: {
      r: {
        beginAtZero: true,
        min: 0,
        max: 100,
        stepSize: 20
      }
    }
  }
});




