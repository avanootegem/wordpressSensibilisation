const global = document.getElementById("global");
const difficultés = document.getElementById("difficultés");
const graphiques = document.getElementById("graphiques");

console.log(difficultés);
console.log(graphiques);
console.log(global);

global.removeChild(difficultés);
global.removeChild(graphiques);

global.appendChild(difficultés);
global.appendChild(graphiques);
