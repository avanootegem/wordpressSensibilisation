const global = document.getElementById("global");
const accueil = document.getElementById("accueil");
const difficultés = document.getElementById("difficultés");

console.log(global);
console.log(accueil);
console.log(difficultés);

global.removeChild(accueil);
global.removeChild(difficultés);

global.appendChild(accueil);
global.appendChild(difficultés);
