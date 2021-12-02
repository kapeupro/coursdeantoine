"use strict";
// les fonctions
function getName()
{
    console.log('hello michel');
}
getName();
getName();
// arguments
function multiplication(nombre1,nombre2 = 2)
{
    const result = nombre1 * nombre2;
    console.log(result);
}
multiplication(23,54); // 1242
multiplication(2,54); // 108
multiplication(2); // 4



let xx = true;
if(xx) {
    function test()
    {
        console.log('test 1')
    }
    //test();
} else {
    function test()
    {
        console.log('test 2')
    }
}
// test(); // Error: test is not defined si "use strict"

// expresssion de fonction

const division = function(nbr1,nbr2) {
    return nbr1 / nbr2;
}
console.log(division(3,34)); // 0.08823529411764706

// Object d'arguments
function ajouter()
{
    // console.log(arguments);
    // console.log(arguments[0]); // 123
    let total = 0;
    let dede = 'michel';
    for(let i = 0;i < arguments.length; i++) {
        total += arguments[i];
        // total = total + arguments[i];
    }
    let obj = {
        total: total,
        dede: dede
    }
    return obj;
}
let letotal = ajouter(123,344,478677,2563,65675677);
console.log(letotal.total); // 66157384
console.log(letotal.dede); // 'michel'

function calculGeneral(...numbers) {
    let total = 0;
    for(let i = 0; i < numbers.length;i++) {
        total += numbers[i];
    }
    return total;
}
console.log(calculGeneral(23,344,3442,26567,65764)); // 96140


function operation(operator, ...nbre)
{
    let total = 0;
    for(let i = 0; i < nbre.length;i++) {
        total += nbre[i];
    }
    console.log(operator)
    return total;
}

console.log(operation('*', 34,34,34,53))
//////////////////////
// Tableaux
/////////////////////

const tab = [];
const tab2 = [2,'hkjhkj', {a:2}, ['dede', 'dada']];
console.log(tab2);
console.log(tab2[3][1]); // dada
const tab3 = Array(34,'kjhkjhkj',{b:12}, ['dede']);
console.log(tab3);
const tab4 = new Array(456,'hgfhg');
console.log(tab4);
// if is a array
console.log(typeof tab2); // object
console.log(Array.isArray(tab2)); // true

const tab5 = ['papaye','kiwi','banane','tomate'];
console.log(tab5.length); // 4
console.log(tab5[1]); // 'kiwi'
tab5[1] = 'wiki';
console.log(tab5[1]);
// ajouter un element à mon tableau
tab5.push('groseille');
console.log(tab5);
// enlever le dernier element
tab5.pop();
tab5.pop();
console.log(tab5); // ['papaye', 'wiki', 'banane']
// enlever le premier
tab5.shift();
console.log(tab5); // ['wiki', 'banane']
// ajouter au debut
tab5.unshift('fraise');
console.log(tab5); // ['fraise','wiki', 'banane']

// copier un tableau
const copyFruit = tab5;
//copyFruit[0] = 'michel';

console.log(tab5); // ['michel', 'wiki', 'banane']
console.log(copyFruit); // ['michel', 'wiki', 'banane']
// bonne manière de copier un tableau, car ici nouvelle référence
const copyFruit2 = tab5.slice(0,3);

copyFruit2[0] = 'michel';
console.log(tab5);
console.log(copyFruit2);

const tab6 = [
    'banane',
    {
        car: 'pigeot'
    },
    'kiwi'
];
console.log(tab6);
const copy6 = tab6.slice();

copy6[1].car = 'renault';
console.log({tab6,copy6});


const tab7 = [
    'banane',
    {
        car: 'pigeot'
    },
    'kiwi'
]
const copy7 = [...tab7];
copy7[1].car = 'renault';
copy7.push('jhghjgjh');
console.log({tab7,copy7});


// JSON
const tab8 = [
    'banane',
    {
        car: 'pigeot'
    },
    'kiwi'
];

const copy8 = JSON.parse(JSON.stringify(tab8));
copy8[1].car = 'renault';
copy8.push('jhghjgjh');
console.log({tab8,copy8});
// attentions si fonction dans l'object => null

// Fusionner des tableaux

const j = [1,2,3];
const l = [4,5,6];
const jl = j + l;
console.log(jl); // 1,2,34,5,6 , marche pas
const k = j.concat(l);
console.log(k);
const kk = j.concat(l).concat(l).concat(j).concat(tab8);
console.log(kk);
const kkk = [...j,...l,...l,...j,...tab8];
console.log(kkk);

// Itérer sur tableau
const legumes = ['courgette', 'radis', 'blette'];
for(let i = 0; i < legumes.length; i++) {
    document.write(`<p>${legumes[i]}</p>`)
}

legumes.forEach(function(legume,index) {
    document.write(`<p>${legume} qui possede index numero ${index}</p>`);
});

for(let legume of legumes) {
    document.write(`<p>${legume}</p>`);
}

















