// Apprentissgage
const barCanvasIntra = document.getElementById("barCanvasIntra");

let positive = document.getElementById("positive").innerHTML;
let ethique = document.getElementById("ethique").innerHTML;
let temps = document.getElementById("temps").innerHTML;
let pression = document.getElementById("pression").innerHTML;
let stress = document.getElementById("stress").innerHTML;
let presence = document.getElementById("presence").innerHTML;
let motivation = document.getElementById("motivation").innerHTML;
let confiance = document.getElementById("confiance").innerHTML;
let soi = document.getElementById("soi").innerHTML;
let resilience = document.getElementById("resilience").innerHTML;

const barChartIntra = new Chart(barCanvasIntra, {
    type: "radar",
    data: {
        labels: [
            "Attitude positive",
            "Éthique",
            "Gestion du temps",
            "Capacité à travailler sous pression",
            "Gestion du stress",
            "Présence",
            "Motivation intrinsèque",
            "Faire confiance",
            "Confiance en soi",
            "Résilience",

        ],

        datasets: [
            {
                label: "Compétences intrapersonnelles",
                data: [positive, ethique, temps, pression, stress, presence, motivation, confiance, soi, resilience],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgb(54, 162, 235)',
                pointBackgroundColor: 'rgb(54, 162, 235)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgb(54, 162, 235)',
            },
        ],
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
})
