// Apprentissgage
const barCanvasApp = document.getElementById("barCanvasApp");

let volonte = document.getElementById("volonte").innerHTML;
let apprendre = document.getElementById("apprendre").innerHTML;
let evaluation = document.getElementById("evaluation").innerHTML;
let controle = document.getElementById("controle").innerHTML;
let auto = document.getElementById("auto").innerHTML;
let esprit = document.getElementById("esprit").innerHTML;
let curiosite = document.getElementById("curiosite").innerHTML;
let methodologie = document.getElementById("methodologie").innerHTML;

const barChartApp = new Chart(barCanvasApp, {
    type: "radar",
    data: {
        labels: [
            "Volonté d'apprendre",
            "Apprendre à apprendre",
            "Auto-évaluation",
            "Contrôle de qualité",
            "Autonomie",
            "Esprit d'entreprendre",
            "Curiosité",
            "Compétence méthodologique",

        ],

        datasets: [
            {
                label: "Apprentissages",
                data: [volonte, apprendre, evaluation, controle, auto, esprit, curiosite, methodologie],
                fill: true,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgb(255, 99, 132)',
                pointBackgroundColor: 'rgb(255, 99, 132)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgb(255, 99, 132)'
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
