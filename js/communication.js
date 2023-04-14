// Apprentissgage
const barCanvasCom = document.getElementById("barCanvasCom");

let orale = document.getElementById("orale").innerHTML;
let ecrite = document.getElementById("ecrite").innerHTML;
let nonverbale = document.getElementById("nonverbale").innerHTML;
let active = document.getElementById("active").innerHTML;



const barChartCom = new Chart(barCanvasCom, {
    type: "radar",
    data: {
        labels: [
            "Communication orale",
            "Communication écrite",
            "Communication non verbale",
            "Écoute active",

        ],

        datasets: [{
            label: "Communication ",
            data: [orale, ecrite, nonverbale, active],
            fill: true,
            backgroundColor: 'rgba(221,160,221,0.5)',
            borderColor: 'rgb(152,52,212)',
            pointBackgroundColor: 'rgb(152,52,212)',
            pointBorderColor: '#fff',
            pointHoverBackgroundColor: '#fff',
            pointHoverBorderColor: 'rgb(152,52,212)'
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
})