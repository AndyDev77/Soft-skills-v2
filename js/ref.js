// Apprentissgage
const barCanvasRef = document.getElementById("barCanvasRef");

let resolution = document.getElementById("resolution").innerHTML;
let analytique = document.getElementById("analytique").innerHTML;
let critique = document.getElementById("critique").innerHTML;
let creativite = document.getElementById("creativite").innerHTML;
let intuition = document.getElementById("intuition").innerHTML;
let ouverture = document.getElementById("ouverture").innerHTML;



const barChartRef = new Chart(barCanvasRef, {
    type: "radar",
    data: {
        labels: [
            "Résolution de problème",
            "Compétence analytique",
            "Esprit Critique",
            "Créativité",
            "Ouverture à la nouveauté",
            "Intuition",

        ],

        datasets: [
            {
                label: "Réfléxion et imagination ",
                data: [resolution, analytique, critique, creativite, intuition, ouverture],
                fill: true,
                backgroundColor: 'rgba(255,240,194, 0.5)',
                borderColor: 'rgb(243,203,0)',
                pointBackgroundColor: 'rgb(243,203,0)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgb(243,203,0)'
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