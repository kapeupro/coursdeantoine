// NUMBER
// limite number
    // perte de precision
console.log(0.2 + 0.4); // 0.6000000000000001
console.log(0.2 * 0.4); // 0.08000000000000002
console.log( 5657657627572657652 ); // 5657657627572657000

console.log(parseFloat("12.9 euros")); // 12.9
console.log(parseInt("12.9 euros")); // 12
console.log(parseFloat("merci pour vos 12.9 euros")); // NaN
console.log(parseFloat("3,67")); // 3

// let nombre1 = prompt('Quel est votre chiffre ?');
// let nombre2 = prompt('Quel est votre chiffre numéro 2 ?');
// console.log( { nombre1,nombre2 });
//
// let resultat = parseFloat(nombre1) / parseFloat(nombre2);
// console.log(resultat);

// Number
// Number.parseInt()
// Number.parseFloat()
// Number.isInteger()
// Number.isNaN()
const a = 100000000;
console.log(a.toExponential()); // 1e+8
const b = 2.36567587897;
console.log(b.toFixed(2))
const c = 40;
console.log(c.toFixed(2)); // 40.00

// Math
console.log(Math.PI);
console.log(Math.PI.toFixed(3));

console.log(Math.random()); // aleatoire entre 0 et 1

// Arrondit à l'entier le plus proche
console.log(Math.round(4.9)); // 5
console.log(Math.round(4.3)); // 4
console.log(Math.round(4.5)); // 5

// retourne le plus grand entier
console.log(Math.ceil(4.9)); // 5
console.log(Math.ceil(4.3)); // 5
console.log(Math.ceil(4.5)); // 5

// retourne le plus petit entier
console.log(Math.floor(4.9)); // 4
console.log(Math.floor(4.9)); // 4
console.log(Math.floor(4.3)); // 4
console.log(Math.floor(-4.5)); // -5

///////////////////////
// Chaine de caractères
///////////////////////
const t1 = 'l\'Lune';
const t2 = "Soleil";
const t3 = String('mars');
const t4 = new String('Neptune');
console.log({t1,t2,t3,t4})

// \n // saut de ligne line feed
// \t // tabulation
// \f // saut de page
// \' // échappement guillemet simple
// \" // échappement guillemet double

// concaténation
console.log('Hello la ' + t1);

// les litteraux de modèle

const x = "bonjour";
const y = 'Au revoir';
const z = `Je vous dit ${x.toUpperCase()}
    dede ${2+6}
    dodo et ${y}
`;
console.log(z);

let user = {
    name: 'Michel',
    age: 12
}
let note = 12.5;
console.log({user,note})
console.log(`je suis ${user.name} et j'ai ${user.age} ans. j'ai eu la note de ${note.toFixed(2)}`);

const faim = true;
const action = 'manger';
const etat = `Michel est ${ faim ? `fatigué et il veut ${action}` : `en pleine forme` }`;
document.write(etat);

///////////  index, length
let utilisateur = 'Michel';
// index
console.log(utilisateur[0]); // M
console.log(utilisateur[1]); // i
console.log(utilisateur[2]); // c
// nombre de caractère de la chaine
console.log(utilisateur.length); // 6
////////// Méthodes sur les chaines de caractères
console.log(utilisateur.charAt()); // M
console.log(utilisateur.charAt(1)); // i
console.log(utilisateur.endsWith('hel')); // true
console.log(utilisateur.startsWith('m')); // false // sensible à la casse
console.log(utilisateur.startsWith('Mic')); // true

console.log(utilisateur.replace('M', 'Jean M')); // Jean Michel
console.log(utilisateur.search('e')); // 4 // index de la lettre e dans 'Michel

console.log(utilisateur.trim()); // enleve caractère vide au debut et à la fin de la chaine
console.log(utilisateur.toUpperCase()); // MICHEL
console.log(utilisateur.toLowerCase()); // michel
let pays = 'istanbul';
let locale = 'fr';

console.log(pays.toLocaleUpperCase(locale));
console.log(pays.toLocaleUpperCase('tr'));

let animal = 'petit pangolin';
console.log(animal.includes('Pangolin')); // false
console.log(animal.includes('pangolin')); // true
console.log(animal.includes('pangolin', 8)); //  false
console.log(animal.includes('pangolin', 3)); // true

let hello = 'Bonjour Michel ! Bonjour Jacky';
console.log(hello.indexOf('Bonjour')); // 0
console.log(hello.indexOf('bonjour')); // -1
console.log(hello.indexOf('Bonjour', 10)); // 17

console.log( hello.lastIndexOf('Bonjour') ); // 17
console.log( hello.lastIndexOf('Bonjour', 10) ); // 0
console.log( hello.lastIndexOf('bonjour') ); // -1

console.log('Bonjour'.concat(' michel,', ' comment tu ', 'vas ' , '?'));

const bandes = 'Jean,Michel,Jacky,Bernard';
// SPLIT
const tabBande = bandes.split(',');
console.log(tabBande);
const tabBande2 = bandes.split('e');
console.log(tabBande2);
console.log(bandes.split(',', 2)); // ['Jean','Michel']
// SLICE
console.log(bandes.slice(2,5)); // "an,"
console.log(bandes.slice(10)); // "l,Jacky,Bernard"

// substr
console.log(bandes.substr(2,10)); // "an,Michel,"

// expression rationnel

