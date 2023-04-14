// Apprentissgage
const barCanvasInter = document.getElementById("barCanvasInter");

let travailequipe = document.getElementById("travailequipe").innerHTML;
let collectif = document.getElementById("collectif").innerHTML;
let coordination = document.getElementById("coordination").innerHTML;
let conflit = document.getElementById("conflit").innerHTML;
let fiabilite = document.getElementById("fiabilite").innerHTML;
let flexibilite = document.getElementById("flexibilite").innerHTML;
let respect = document.getElementById("respect").innerHTML;
let assertivite = document.getElementById("assertivite").innerHTML;
let feedback = document.getElementById("feedback").innerHTML;
let politesse = document.getElementById("politesse").innerHTML;

const barChartInter = new Chart(barCanvasInter, {
    type: "radar",
    data: {
        labels: [
            "Travail en équipe",
            "Sens du collectif",
            "Coordination",
            "Gestion de conflit",
            "Fiabilité",
            "Flexibilité et adaptabilité",
            "Respect",
            "Assertivité",
            "Acceptation du feedback",
            "Politesse",

        ],

        datasets: [
            {
                label: "Compétences interpersonnelles",
                data: [travailequipe, collectif, coordination, conflit, fiabilite, flexibilite , respect, assertivite, feedback, politesse],
                fill: true,
                backgroundColor: 'rgba(254,216,177, 0.5)',
                borderColor: 'rgb(240,147,43)',
                pointBackgroundColor: 'rgb(240,147,43)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgb(240,147,43)'
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
