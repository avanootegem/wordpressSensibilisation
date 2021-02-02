const global = document.getElementById("global");
const accueil = document.getElementById("accueil");
const difficultés = document.getElementById("difficultés");
const graphiques = document.getElementById("graphiques");
const solutions = document.getElementById("solutions");


global.removeChild(accueil);
global.removeChild(difficultés);
global.removeChild(graphiques);
global.removeChild(solutions);

global.appendChild(accueil);
global.appendChild(difficultés);
global.appendChild(graphiques);
global.appendChild(solutions);