// Apprentissgage
const barCanvasLead = document.getElementById("barCanvasLead");

let responsabilite = document.getElementById("responsabilite").innerHTML;
let incertitude = document.getElementById("incertitude").innerHTML;
let vision = document.getElementById("vision").innerHTML;
let strategique = document.getElementById("strategique").innerHTML;
let decision = document.getElementById("decision").innerHTML;
let integrite = document.getElementById("integrite").innerHTML;
let audace = document.getElementById("audace").innerHTML;
let negociation= document.getElementById("negociation").innerHTML;
let emotionnelle = document.getElementById("emotionnelle").innerHTML;
let professionnalisme = document.getElementById("professionnalisme").innerHTML;

const barChartLead = new Chart(barCanvasLead, {
    type: "radar",
    data: {
        labels: [
            "Responsabilité",
            "Capacité à faire face à l'incertitude",
            "Vision, visualisation",
            "Pensée stratégique",
            "Jugement et prise de décision",
            "Intégrité",
            "Audace",
            "Négociation",
            "Intelligence émotionnelle",
            "Professionnalisme",

        ],

        datasets: [
            {
                label: "Leadership",
                data: [responsabilite, incertitude, vision, strategique, decision, integrite , audace, negociation, emotionnelle, professionnalisme],
                fill: true,
                backgroundColor: 'rgba(200,230,201, 0.5)',
                borderColor: 'rgb(56,142,60)',
                pointBackgroundColor: 'rgb(56,142,60)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgb(56,142,60)'
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
