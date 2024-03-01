
//Dia 4
const valorRandomico = Math.floor(Math.random() * (10 - 0 + 1) + 0 );
console.log("numero random: " + valorRandomico);
let valorChute ="";
let acertou = false;

for (let index = 0; index < 3; index++) {
    
    valorChute = prompt("De 0 a 10. Qual valor você deseja chutar?");

    if(valorChute==valorRandomico)
    {
        console.log("Parabéns você acertou!");
        acertou=true;
        break;
    }

    console.log(`Não acertou. Você tem mais ${3-index-1} tentativa(s)`);
}

if(!acertou){
    console.log("Infelizmente você não conseguiu acertar")
}

// Dia 5
const resposta = "";
let comida = "";

while(resposta!="Não"){
    resposta = prompt("Você deseja adicionar uma comida?");

    if(resposta=="Sim")
    {
        comida = prompt("Qual comida você deseja")
    }
}









