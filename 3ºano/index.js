

const numDel = [2, 3, 4, 5, 6, 7, 8, 9];

let numRandom; // Melhor usar let aqui, pois o valor será reatribuído

do {
    numRandom = Math.floor(Math.random() * 11); // Gera um número aleatório entre 0 e 99
} while (numDel.includes(numRandom)); // Continua enquanto o número estiver em numDel

console.log(numRandom); // Exibe o número gerado
