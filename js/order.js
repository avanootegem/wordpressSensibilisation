const global = document.getElementById("global");
const accueil = document.getElementById("accueil");
const difficultés = document.getElementById("difficultés");
const graphiques = document.getElementById("graphiques");
const solutions = document.getElementById("solutions");
const footer = document.getElementById("footer");


global.removeChild(accueil);
global.removeChild(difficultés);
global.removeChild(graphiques);
global.removeChild(solutions);
global.removeChild(footer);

global.appendChild(accueil);
global.appendChild(difficultés);
global.appendChild(graphiques);
global.appendChild(solutions);
global.appendChild(footer);


const nav = document.getElementById("nav-bar");
const menu = document.getElementById("menu");
menu.onclick = function() {
    nav.classList.toggle("change");
}

console.log(menu);
